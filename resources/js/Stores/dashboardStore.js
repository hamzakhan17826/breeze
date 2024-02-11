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
            const data = {current_page: useUtilityStore().paginate.current_page, status: status};
            await axios.post(route('dashboardContaminate'), data)
                .then((response) => {
                    // console.log(JSON.stringify(response.data.data));
                    vm.lists = response.data.data;
                    useUtilityStore().paginate.current_page = response.data.data.current_page;
                    vm.fetching = false;
                })
                .catch(error => {
                    console.error('updateContaminate error:', error.response.data.message);
                })
        },
    }
});
