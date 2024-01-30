import {defineStore} from "pinia";
import {router} from "@inertiajs/vue3";

export const useContaminateStore = defineStore({
    id: 'contaminate',
    state: () => ({
        store: {},
        lists: {},
        clone: {},
        fetching: false,
    }),
    getters: {},
    actions: {
        openModal(modalId = null, item = null) {
            console.log('openModal');
            let vm = this;
            vm.clone = _.cloneDeep(item);
            const modalElement = document.getElementById(modalId);
            if (modalElement) {
                modalElement.classList.remove('hidden');
            }
        },
        closeModal(modalId = null) {
            console.log('closeModal');
            const modalElement = document.getElementById(modalId);
            if (modalElement) {
                modalElement.classList.add('hidden');
            }
        },
        async createContaminate() {
            let vm = this;
            vm.fetching = true;
            console.log('createContaminate');
            await axios.post(route('contaminates.store'), vm.store)
                .then(response => {
                    vm.fetching = false;
                    router.visit('/contaminates');
                })
                .catch(error => {
                    console.error('createContaminate error:', error.response.data.message);
                });
        },
        async updateContaminate() {
            let vm = this;
            console.log('updateContaminate');
            await axios.put(route('contaminates.update', {id: vm.clone.id}), vm.clone)
                .then(response => {
                    this.closeModal();
                    router.visit('/contaminates');
                })
                .catch(error => {
                    console.error('updateContaminate error:', error.response.data.message);
                })
        },
        async deleteContaminate(){
            let vm = this;
            console.log('deleteContaminate');
            await axios.delete(route('contaminates.destroy', {id: vm.clone.id}))
                .then(response => {
                    this.closeModal();
                    router.visit('/contaminates');
                })
                .catch(error => {
                    console.error('deleteContaminate error:', error.response.data.message);
                })
        }
    }
})
