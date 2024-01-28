import {defineStore} from "pinia";
export const useUtilityStore = defineStore({
    id: 'utility',
    state: () => ({
        paginate: {
            current_page: 1,
            per_page: 10,
            first_page_url: 1,
            last_page_url: 1,
            next_page_url: 1,
            prev_page_url: null,
            from: 1,
            to: 1,
            total: 1,
            last_page: 1,
        }
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
    }
})
