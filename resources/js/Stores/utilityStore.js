import {defineStore} from "pinia";
export const useUtilityStore = defineStore({
    id: 'utility',
    state: () => ({
        pagination: {
            current_page: '',
            per_page: '',
            first_page_url: '',
            last_page_url: '',
            next_page_url: '',
            prev_page_url: '',
            from: '',
            to: '',
            total: '',
            last_page: '',
            links: ''
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
        updatePagination(data = null){
            // console.log('updatePagination', JSON.stringify(data));
            const pagination = useUtilityStore().pagination;
            pagination.current_page = data.current_page;
            pagination.per_page = data.per_page;
            pagination.first_page_url = data.first_page_url;
            pagination.last_page_url = data.last_page_url;
            pagination.next_page_url = data.next_page_url;
            pagination.prev_page_url = data.prev_page_url;
            pagination.from = data.from;
            pagination.to = data.to;
            pagination.total = data.total;
            pagination.last_page = data.last_page;
            pagination.links = data.links;
            const active_link = data.links.find(link => link.active);
            if (active_link){
                pagination.active_link = active_link.active;
                const active_page = active_link.url ? parseInt(active_link.url.split('=')[1]) : null;
                pagination.active_page = active_page;
            }else{
                pagination.active_link = null;
                pagination.active_page = null;
            }
            console.log('active_link', JSON.stringify(active_link));
        }
    }
})
