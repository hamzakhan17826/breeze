import {defineStore} from "pinia";
import {useUtilityStore} from "@/Stores/utilityStore.js";
import axios from "axios";
import {ref} from "vue";

export const useDashboardStore = defineStore({
    id: 'dashboard',
    state: () => ({
        store: ref({}),
        lists: ref({}),
        fetching: false,
        clone: {},
    }),
    getters: {},
    actions: {
        async contaminateNavigation(status = null) {
            let vm = this;
            vm.fetching = true;
            const data = {current_page: useUtilityStore().pagination.current_page, status: status};
            await axios.post(route('dashboardContaminate'), data)
                .then((response) => {
                    vm.lists = response.data.data;
                    // console.log(JSON.stringify(response.data.data));
                    useUtilityStore().updatePagination(response.data.data);
                    vm.fetching = false;
                })
                .catch(error => {
                    console.error('updateContaminate error:', error.response.data.message);
                })
        },
    }
});
