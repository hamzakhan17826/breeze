<script setup>
import {ref} from 'vue';
import Aside from "@/Components/Aside.vue";
import Navbar from "@/Components/Navbar.vue";

const sidebarVisible = ref(true);
</script>

<template>
    <div class="main_div">
        <Aside></Aside>
        <div class="back_sidebar"></div>
        <!--        <main>-->
        <section class="main_content max-md:flex-row" :class="[{ 'show': sidebarVisible }]">
            <Navbar></Navbar>
            <slot/>
        </section>
        <!--        </main>-->
    </div>
</template>
