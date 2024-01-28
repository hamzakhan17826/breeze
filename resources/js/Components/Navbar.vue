<script setup>
import {Link} from "@inertiajs/vue3";
import {ref} from "vue";
const header_user_name_dropdown = ref(false);
const headerUsernameDropdown = () => {
    header_user_name_dropdown.value = !header_user_name_dropdown.value;
}
</script>

<template>
    <div class="header_navbar">
        <div class="header_navbar_name">
            Dashboard
        </div>
        <div class="header_user_name_parent">
            <div class="header_user_name">
                <div class="user_name">Chris Walcott</div>
                <div class="company_name">Plymovent</div>
            </div>
            <div class="header_user_name_caret" @click="headerUsernameDropdown()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M5 7.5L10 12.5L15 7.5" stroke="#222222" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                </svg>
                <div class="header_user_name_dropdown" :class="{ 'show': header_user_name_dropdown }">
                    <Link :href="route('profile.edit')">Profile</Link>
                    <Link :href="route('logout')" method="post" as="button" type="button" class="logout">Log out
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">

</style>
