<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {useContaminateStore} from "@/Stores/contaminateStore.js";
const storeContaminate = useContaminateStore();
</script>
<template>
<AuthenticatedLayout>
    <div class="py-4 px-6">
        <div class="p-[1.25rem] bg-white border rounded">
            <h1 class="text-xl font-bold mb-4">Create contaminate</h1>
            <div class="max-w-sm">
                <div class="mb-5">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                    <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block
                    w-full p-2.5" v-model="storeContaminate.store.title">
                </div>
                <div class="mb-5">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                    <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500
                    focus:border-blue-500" v-model="storeContaminate.store.description"></textarea>
                </div>
                <div class="mb-5">
                    <label for="icon" class="block mb-2 text-sm font-medium text-gray-900">Upload icon</label>
                    <input type="file" id="icon" class="file-input w-full max-w-xs" v-on:change="storeContaminate.store.icon"/>
                </div>
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm
                w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" @click="storeContaminate.createContaminate()">Create
                </button>
            </div>
        </div>
    </div>
</AuthenticatedLayout>
</template>
<style lang="scss">

</style>
