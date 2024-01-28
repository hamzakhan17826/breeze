<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {useContaminateStore} from "@/Stores/contaminateStore.js";
import {onMounted, watchEffect} from "vue";
import {usePage, Link, Head} from "@inertiajs/vue3";

const storeContaminate = useContaminateStore();
onMounted(() => {
    watchEffect(() => {
        storeContaminate.store = {};
        storeContaminate.lists = usePage().props.lists;
    });
})
</script>
<template>
    <Head title="Contaminate" />
    <AuthenticatedLayout>
        <div class="py-4 px-6">
            <div class="p-[1.25rem] bg-white border rounded">
                <div class="mb-6">
                    <Link type="button" :href="route('contaminates.create')" class="px-4 py-2 bg-[#FFCB1F] rounded font-bold hover:bg-[#e9bb20]">Add contaminate</Link>
                </div>
                <h1 class="text-xl font-bold mb-4">Contaminate</h1>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-white">
                        <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="px-6 py-3">Title</th>
                            <th scope="col" class="px-6 py-3">Description</th>
                            <th scope="col" class="px-6 py-3">Icon</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-white border-b text-black dark:border-gray-700" v-for="item in storeContaminate.lists" :key="item.id">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ item.title }}
                            </th>
                            <td class="px-6 py-4">
                                {{ item.description }}
                            </td>
                            <td class="px-6 py-4">
                                {{ item.icon ? item.icon : '-' }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-600" @click="storeContaminate.openModal('edit', item)">Edit</button>
                                    <button class="text-red-600" @click="storeContaminate.openModal('delete', item)">Delete</button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!--        Edit Contaminate-->
                <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="edit">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="storeContaminate.closeModal('edit')">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div
                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                            <div class="bg-white p-6">
                                <h1 class="text-xl font-bold mb-4">Edit contaminate</h1>
                                <div class="max-w-sm">
                                    <div class="mb-5">
                                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                                        <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block
            w-full p-2.5" v-model="storeContaminate.clone.title">
                                    </div>
                                    <div class="mb-5">
                                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500
            focus:border-blue-500" v-model="storeContaminate.clone.description"></textarea>
                                    </div>
                                    <!--                <div class="mb-5">-->
                                    <!--                    <label for="icon" class="block mb-2 text-sm font-medium text-gray-900">Upload icon</label>-->
                                    <!--                    <input type="file" id="icon" class="file-input w-full max-w-xs" v-model="storeContaminate.data.icon"/>-->
                                    <!--                </div>-->
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:justify-end">
                                <button type="button"
                                        class="mt-3 me-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium
                        text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                                        @click="storeContaminate.closeModal('edit')">
                                    Cancel
                                </button>
                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm
        w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" @click="storeContaminate.updateContaminate()">Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--        Delete Contaminate-->
                <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="delete">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="storeContaminate.closeModal('delete')">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div
                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                            <div class="bg-white p-6">
                                <h1 class="text-xl font-bold mb-4">Delete contaminate:<span class="ml-5">{{ storeContaminate.clone.title }}</span></h1>
                                <div class="max-w-sm">
                                    Are you sure you want to delete contaminate?
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:justify-end">
                                <button type="button"
                                        class="mt-3 me-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium
                        text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                                        @click="storeContaminate.closeModal('delete')">
                                    Cancel
                                </button>
                                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg
                                text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" @click="storeContaminate.deleteContaminate()">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style lang="scss">

</style>
