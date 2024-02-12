<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import {useDashboardStore} from "@/Stores/dashboardStore.js";
import {useUtilityStore} from "@/Stores/utilityStore.js";
import {usePage} from "@inertiajs/vue3";
import {onMounted, watchEffect} from "vue";

const storeDashboard = useDashboardStore();
const storeUtility = useUtilityStore();
onMounted(() => {
    watchEffect(() => {
        storeDashboard.lists = usePage().props.contaminate;
        storeDashboard.lists.all_contaminates = usePage().props.all_contaminates;
    });
});
console.log(JSON.stringify(usePage().props));

function alert(index=null){
    window.alert(index);
}
</script>

<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="first_row">
            <h2 class="first_row_title">Hi, Chris</h2>
            <p class="first_row_detail">
                Welcome to the AirMonitor section of My Plymovent! <br>
                Here you can control, manage and monitor all your connected Plymovent air monitoring systems.
            </p>
        </div>
        <div class="second_row max-lg:flex-wrap max-[787px]:flex-wrap">
            <div class="sr_first_column max-lg:flex-grow max-lg:basis-5/12 max-[787px]:basis-full">
                <div class="device_main">
                    <h6 class="device_main_title">Device main sensor status</h6>
                    <div class="device_main_group">
                        <div class="first">
                            <div class="count">3</div>
                            <div class="status">Good</div>
                        </div>
                        <div class="second">
                            <div class="count">2</div>
                            <div class="status">Moderate</div>
                        </div>
                        <div class="third">
                            <div class="count">0</div>
                            <div class="status">Bad</div>
                        </div>
                    </div>
                </div>
                <div class="alerts">
                    <h5 class="alert_title">Alerts</h5>
                    <div class="alert_two_cards">
                        <div class="card_one">
                            <div class="alert_count">
                                5
                            </div>
                            <div class="alert_status">
                                Most recent
                            </div>
                            <div class="alert_time_ago">
                                2 hours ago
                            </div>
                        </div>
                        <div class="card_two">
                            <div class="alert_count">
                                7
                            </div>
                            <div class="alert_status">
                                Most recent
                            </div>
                            <div class="alert_time_ago">
                                3 hours ago
                            </div>
                        </div>
                    </div>
                    <p class="alert_description" v-if="1 == 0">There are no active alerts right now</p>
                </div>
            </div>
            <div class="sr_second_column max-lg:flex-grow max-lg:basis-5/12 max-[787px]:basis-full">
                <div class="device_header">
                    <div class="device_header_name">
                        Devices
                    </div>
                    <div class="device_header_plus">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none">
                            <path
                                d="M18 12.998H13V17.998C13 18.2633 12.8946 18.5176 12.7071 18.7052C12.5196 18.8927 12.2652 18.998 12 18.998C11.7348 18.998 11.4804 18.8927 11.2929 18.7052C11.1054 18.5176 11 18.2633 11 17.998V12.998H6C5.73478 12.998 5.48043 12.8927 5.29289 12.7052C5.10536 12.5176 5 12.2633 5 11.998C5 11.7328 5.10536 11.4785 5.29289 11.2909C5.48043 11.1034 5.73478 10.998 6 10.998H11V5.99805C11 5.73283 11.1054 5.47848 11.2929 5.29094C11.4804 5.1034 11.7348 4.99805 12 4.99805C12.2652 4.99805 12.5196 5.1034 12.7071 5.29094C12.8946 5.47848 13 5.73283 13 5.99805V10.998H18C18.2652 10.998 18.5196 11.1034 18.7071 11.2909C18.8946 11.4785 19 11.7328 19 11.998C19 12.2633 18.8946 12.5176 18.7071 12.7052C18.5196 12.8927 18.2652 12.998 18 12.998Z"
                                fill="#262626" />
                        </svg>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" viewBox="0 0 180 180"
                             fill="none">
                            <path
                                d="M180 90C180 139.706 139.706 180 90 180C40.2944 180 0 139.706 0 90C0 40.2944 40.2944 0 90 0C139.706 0 180 40.2944 180 90ZM9 90C9 134.735 45.2649 171 90 171C134.735 171 171 134.735 171 90C171 45.2649 134.735 9 90 9C45.2649 9 9 45.2649 9 90Z"
                                fill="#41D583" />
                        </svg>
                        <div class="device_image">
                            <img src="../assets/images/device.png" alt="">
                        </div>
                        <div class="device_count">
                            1
                        </div>
                        <div class="device_name">
                            Devices
                        </div>
                    </div>
                </div>
                <div class="active_inactive">
                    <div class="active_group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                             fill="none">
                            <circle cx="8" cy="8" r="7.25" fill="#41D583" stroke="#41D583" stroke-width="1.5" />
                        </svg>
                        <div>
                            <span class="active">Active:<b>&nbsp;1</b></span>
                        </div>
                    </div>
                    <div class="inactive_group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                             fill="none">
                            <circle cx="8" cy="8" r="7.25" fill="#E2E2E2" stroke="#E2E2E2" stroke-width="1.5" />
                        </svg>
                        <div>
                            <span class="inactive">Inactive:<b>&nbsp;0</b></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sr_third_column max-lg:basis-full max-[787px]:basis-full w-[36.375rem]">
                <div class="contaminate_header">
                    <div class="contaminate_header_name">
                        Learn about contaminants
                    </div>
                    <div class="contaminate_header_arrows">
                        <div class="arrow_group">
                            <svg :class="storeDashboard.lists.prev_page_url === null ? 'opacity-50 cursor-default pointer-events-none': 'cursor-pointer'"
                                 @click="storeDashboard.contaminateNavigation('prev')"
                                 xmlns="http://www.w3.org/2000/svg"
                                 width="20"
                                 height="20"
                                 viewBox="0 0 20 20"
                                 fill="none">
                                <path d="M12.5 15L7.5 10L12.5 5" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg :class="storeDashboard.lists.next_page_url === null ? 'opacity-50 cursor-default pointer-events-none': 'cursor-pointer'"
                                 @click="storeDashboard.contaminateNavigation('next')"
                                 xmlns="http://www.w3.org/2000/svg" width="20"
                                 height="20"
                                 viewBox="0 0 20 20"
                                 fill="none">
                                <path d="M7.5 15L12.5 10L7.5 5" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <template v-if="storeDashboard?.lists?.data?.[0]">
                    <div class="contaminate_logo_title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <rect width="30" height="30" rx="15" fill="#FFCB1F" />
                            <path
                                d="M15.0563 7.24715C14.8176 7.28904 14.5705 7.56964 14.3317 7.25972C14.1056 6.95817 14.3066 6.71945 14.4532 6.46816C14.6793 6.08284 14.8804 5.68497 15.1233 5.31641C15.3955 4.90597 15.7431 4.89341 15.9986 5.28709C16.3127 5.77292 16.5808 6.28807 16.8656 6.79483C16.9619 6.96236 16.9661 7.1257 16.8279 7.27647C16.564 7.56127 16.3085 7.35605 16.0321 7.20527C15.9484 8.27326 15.5128 9.12345 14.8511 9.89407C13.7789 11.1421 13.804 12.6876 14.8804 13.9608C15.3201 14.4843 15.6803 15.033 15.8813 15.7031C16.2164 16.8255 15.9149 17.7971 15.295 18.7143C15.0772 19.0327 14.8134 19.3174 14.5956 19.6399C13.871 20.7037 13.9171 22.1403 14.7045 23.1622C14.8971 23.4093 15.1735 23.6773 14.805 23.9412C14.4699 24.1799 14.2354 23.8951 14.0386 23.648C12.8198 22.1486 12.8617 20.3226 14.181 18.7814C15.027 17.793 15.4039 16.7417 14.8888 15.4727C14.738 15.1083 14.5328 14.7942 14.2605 14.5136C12.9287 13.1273 12.8114 11.1966 13.9715 9.65116C14.3904 9.09414 14.872 8.58318 15.0395 7.87957C15.0856 7.67435 15.1777 7.47332 15.0563 7.24715Z"
                                fill="#262626" stroke="#262626" stroke-width="0.6" />
                            <path
                                d="M21.0321 9.89854C19.96 10.799 19.8971 12.625 20.8856 13.827C21.0824 14.0658 21.3127 14.2794 21.4803 14.5348C22.4352 16.0007 22.3263 17.7262 21.1368 19.0832C20.2699 20.0674 19.9516 21.1312 20.3788 22.396C20.4793 22.7018 20.6887 22.9279 20.8688 23.175C21.0363 23.4096 21.2834 23.6818 20.9651 23.9331C20.651 24.1802 20.3913 23.9373 20.1736 23.6985C19.2396 22.6766 19.0176 20.8967 19.7003 19.6905C19.8971 19.3387 20.1401 19.0078 20.3955 18.6979C21.5473 17.2948 21.5347 15.8248 20.3327 14.472C19.0386 13.0103 18.9506 11.1717 20.1149 9.59281C20.2825 9.36246 20.3662 9.27032 20.027 9.10698C19.6291 8.91013 19.6794 8.48294 20.1024 8.33636C20.6678 8.1437 21.2415 7.9678 21.8237 7.85053C22.2509 7.76258 22.4352 8.03481 22.3598 8.44106C22.2718 8.89338 22.1546 9.3457 22.0373 9.79384C21.9577 10.0912 21.8991 10.443 21.5305 10.4974C21.1285 10.5477 21.1871 10.1121 21.0321 9.89854Z"
                                fill="#262626" stroke="#262626" stroke-width="0.6" />
                            <path
                                d="M8.63377 14.6053C8.46206 14.8734 8.46206 15.2084 8.11444 15.1749C7.81289 15.1456 7.70819 14.8943 7.63699 14.6556C7.49878 14.1949 7.36057 13.73 7.27262 13.2567C7.1721 12.729 7.39407 12.5238 7.91341 12.6243C8.36573 12.7165 8.81386 12.8421 9.25781 12.9677C9.51747 13.0431 9.79808 13.1227 9.80227 13.4745C9.80646 13.8221 9.50491 13.8221 9.27456 13.8766C9.24524 14.1111 9.42533 14.1991 9.52166 14.3331C10.6148 15.8115 10.5478 17.6962 9.34576 19.0825C8.08512 20.5358 8.02649 21.7378 9.14054 23.3083C9.28294 23.5094 9.41696 23.7313 9.18242 23.9198C8.906 24.146 8.65052 24.0161 8.42436 23.7774C7.26843 22.567 7.15954 20.5064 8.18982 19.1872C8.72591 18.5045 9.34157 17.8679 9.39183 16.9298C9.44209 16.0754 9.31225 15.2838 8.63377 14.6053Z"
                                fill="#262626" stroke="#262626" stroke-width="0.6" />
                            <path
                                d="M16.4697 12.3989C16.4949 12.089 16.4027 11.7163 16.8006 11.666C17.2152 11.6157 17.2822 11.9634 17.3157 12.2859C17.3827 12.9853 17.6927 13.5591 18.1659 14.07C18.6978 14.648 19.0329 15.3348 19.0957 16.139C19.1208 16.4489 19.0957 16.7588 18.7271 16.8091C18.3753 16.8551 18.279 16.5452 18.2455 16.2772C18.1408 15.4563 17.7597 14.8071 17.1901 14.2124C16.7126 13.714 16.5032 13.0649 16.4697 12.3989Z"
                                fill="#262626" />
                            <path
                                d="M13.1568 16.6284C13.0856 17.332 12.9056 18.0314 12.3443 18.5717C12.1601 18.7476 11.9548 18.8523 11.7329 18.6722C11.5025 18.4879 11.557 18.2492 11.7077 18.0524C12.4616 17.0849 12.4825 16.13 11.7119 15.1584C11.5402 14.9448 11.4983 14.6851 11.7747 14.505C12.0428 14.3291 12.2522 14.4673 12.4197 14.6809C12.8637 15.2379 13.115 15.8745 13.1568 16.6284Z"
                                fill="#262626" />
                            <path
                                d="M17.6252 19.1748C17.9393 19.1832 18.1445 19.5392 17.9351 19.7988C17.1561 20.7789 17.1393 21.7505 17.8807 22.7557C18.0482 22.9818 18.0272 23.2457 17.7885 23.4216C17.554 23.5933 17.399 23.4049 17.2482 23.2541C16.218 22.2405 16.2096 20.3642 17.2273 19.3758C17.3404 19.2711 17.4576 19.1748 17.6252 19.1748Z"
                                fill="#262626" />
                        </svg>
                        <div class="contaminate_title">
                            {{ storeDashboard.lists.data[0].title }}
                        </div>
                    </div>
                    <div class="contaminate_description">
                        {{ storeDashboard.lists.data[0].description }}
                    </div>
                </template>
                <template v-else>
                    <p class="flex justify-center h-full items-center font-bold">No contaminates found</p>
                </template>
                <div class="contaminate_footer" v-if="storeDashboard?.lists?.data?.[0]">
                    <div class="read_more_group" @click="storeUtility.openModal('contaminate')">
                        <div class="read_more">
                            Read more
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                             fill="none">
                            <path d="M7.5 15L12.5 10L7.5 5" stroke="#262626" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="third_row max-lg:flex-wrap max-[787px]:flex-wrap">
            <div class="tr_first_column max-lg:flex-grow max-lg:basis-5/12 max-[787px]:basis-full">
                <div class="shop_title">Shop</div>
                <div class="icon_name_info">
                    <div class="shop_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                             fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M3.24593 4.33366H4.32926L8.22926 12.5562L6.76676 15.1995C5.97593 16.6512 7.01593 18.417 8.6626 18.417H20.5793C21.1751 18.417 21.6626 17.9295 21.6626 17.3337C21.6626 16.7378 21.1751 16.2503 20.5793 16.2503H8.6626L9.85426 14.0837H17.9251C18.7376 14.0837 19.4526 13.6395 19.8209 12.9678L23.6993 5.93699C24.1001 5.22199 23.5801 4.33366 22.7568 4.33366H6.72343L5.9976 2.78449C5.82426 2.40533 5.43426 2.16699 5.0226 2.16699H3.24593C2.6501 2.16699 2.1626 2.65449 2.1626 3.25033C2.1626 3.84616 2.6501 4.33366 3.24593 4.33366ZM8.6626 19.5003C7.47093 19.5003 6.50676 20.4753 6.50676 21.667C6.50676 22.8587 7.47093 23.8337 8.6626 23.8337C9.85426 23.8337 10.8293 22.8587 10.8293 21.667C10.8293 20.4753 9.85426 19.5003 8.6626 19.5003ZM17.3401 21.667C17.3401 20.4753 18.3043 19.5003 19.4959 19.5003C20.6876 19.5003 21.6626 20.4753 21.6626 21.667C21.6626 22.8587 20.6876 23.8337 19.4959 23.8337C18.3043 23.8337 17.3401 22.8587 17.3401 21.667Z"
                                  fill="#FFCB1F" />
                        </svg>
                    </div>
                    <div class="shop_name">Sensor lifecycle</div>
                    <div class="shop_info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                             fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.00016 1.33301C4.32016 1.33301 1.3335 4.31967 1.3335 7.99967C1.3335 11.6797 4.32016 14.6663 8.00016 14.6663C11.6802 14.6663 14.6668 11.6797 14.6668 7.99967C14.6668 4.31967 11.6802 1.33301 8.00016 1.33301ZM7.3335 4.66634V5.99967H8.66683V4.66634H7.3335ZM8.66683 10.6663C8.66683 11.033 8.36683 11.333 8.00016 11.333C7.6335 11.333 7.3335 11.033 7.3335 10.6663V7.99967C7.3335 7.63301 7.6335 7.33301 8.00016 7.33301C8.36683 7.33301 8.66683 7.63301 8.66683 7.99967V10.6663ZM2.66683 7.99967C2.66683 10.9397 5.06016 13.333 8.00016 13.333C10.9402 13.333 13.3335 10.9397 13.3335 7.99967C13.3335 5.05967 10.9402 2.66634 8.00016 2.66634C5.06016 2.66634 2.66683 5.05967 2.66683 7.99967Z"
                                  fill="#262626" fill-opacity="0.7" />
                        </svg>
                    </div>
                </div>
                <div class="three_boxes">
                    <div class="box_one">
                        <div class="count">4</div>
                        <div class="status">Good</div>
                    </div>
                    <div class="box_two">
                        <div class="count">2</div>
                        <div class="status">Replace soon</div>
                    </div>
                    <div class="box_three">
                        <div class="count">0</div>
                        <div class="status">Replace ASAp</div>
                    </div>
                </div>
                <div class="two_cards">
                    <div class="first_card_group">
                        <div class="first_card">
                            <div class="name">Spare parts</div>
                            <div class="status">Dust sensor</div>
                        </div>
                        <div class="right_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                <path d="M6 12L10 8L6 4" stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="second_card_group">
                        <div class="second_card">
                            <div class="name">Spare parts</div>
                            <div class="status">Other</div>
                        </div>
                        <div class="right_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                <path d="M6 12L10 8L6 4" stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tr_second_column_group max-lg:flex-grow max-lg:basis-5/12 max-[787px]:basis-full">
                <div class="first_card">
                    <div class="title">Subscription</div>
                    <div class="icon_status_timestamp">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                 fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M5.4165 5.41667C4.8182 5.41667 4.33317 5.90169 4.33317 6.5V21.6667C4.33317 22.265 4.8182 22.75 5.4165 22.75H20.5832C21.1815 22.75 21.6665 22.265 21.6665 21.6667V6.5C21.6665 5.90169 21.1815 5.41667 20.5832 5.41667H5.4165ZM2.1665 6.5C2.1665 4.70507 3.62158 3.25 5.4165 3.25H20.5832C22.3781 3.25 23.8332 4.70507 23.8332 6.5V21.6667C23.8332 23.4616 22.3781 24.9167 20.5832 24.9167H5.4165C3.62158 24.9167 2.1665 23.4616 2.1665 21.6667V6.5Z"
                                      fill="#FFCB1F" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M17.3333 1.08301C17.9316 1.08301 18.4167 1.56803 18.4167 2.16634V6.49967C18.4167 7.09798 17.9316 7.58301 17.3333 7.58301C16.735 7.58301 16.25 7.09798 16.25 6.49967V2.16634C16.25 1.56803 16.735 1.08301 17.3333 1.08301Z"
                                      fill="#FFCB1F" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M8.66683 1.08301C9.26514 1.08301 9.75016 1.56803 9.75016 2.16634V6.49967C9.75016 7.09798 9.26514 7.58301 8.66683 7.58301C8.06852 7.58301 7.5835 7.09798 7.5835 6.49967V2.16634C7.5835 1.56803 8.06852 1.08301 8.66683 1.08301Z"
                                      fill="#FFCB1F" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M2.1665 10.8333C2.1665 10.235 2.65153 9.75 3.24984 9.75H22.7498C23.3481 9.75 23.8332 10.235 23.8332 10.8333C23.8332 11.4316 23.3481 11.9167 22.7498 11.9167H3.24984C2.65153 11.9167 2.1665 11.4316 2.1665 10.8333Z"
                                      fill="#FFCB1F" />
                            </svg>
                        </div>
                        <div class="status_timestamp">
                            <div class="active_status">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8"
                                         fill="none">
                                        <circle cx="4" cy="4" r="4" fill="#41D583" />
                                    </svg>
                                </div>
                                <div class="active">Active</div>
                            </div>
                            <div class="time_stamp">Since 24 April 21</div>
                        </div>
                    </div>
                    <div class="two_cards">
                        <div class="tc_first_card">
                            <div class="text">December 2023</div>
                            <div class="download_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                    <path
                                        d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10"
                                        stroke="#262626" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M4.6665 6.66699L7.99984 10.0003L11.3332 6.66699" stroke="#262626"
                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8 10V2" stroke="#262626" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="tc_second_card">
                            <div class="text">More invoices</div>
                            <div class="download_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                    <path d="M6 12L10 8L6 4" stroke="#222222" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="support">
                    <div class="support_title">Support</div>
                    <div class="support_icon_cards">
                        <div class="support_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path
                                    d="M9.68862 17.4357C9.68862 17.6823 9.68654 17.9186 9.68862 18.1549C9.70312 19.4814 10.6918 20.4763 12.0162 20.4846C13.1354 20.4929 14.2547 20.4804 15.3739 20.4929C15.5356 20.495 15.7159 20.5426 15.8547 20.6235C16.9678 21.2784 18.0746 21.9417 19.1772 22.6133C19.4757 22.7957 19.7741 22.8806 20.0933 22.7003C20.4146 22.52 20.4975 22.2194 20.4892 21.8692C20.4788 21.4215 20.4871 20.9738 20.4871 20.5136C20.6674 20.4846 20.827 20.4659 20.9825 20.4307C22.0375 20.1965 22.7898 19.2866 22.794 18.2088C22.8023 15.8749 22.8023 13.5411 22.794 11.2072C22.7898 9.9615 21.8136 8.97282 20.568 8.92308C20.3773 8.91478 20.1845 8.90442 19.9938 8.92308C19.7596 8.94588 19.7057 8.8526 19.7057 8.63082C19.714 7.23383 19.7099 5.8389 19.7099 4.4419C19.7078 2.51221 18.3958 1.2002 16.4641 1.2002C12.4473 1.2002 8.43052 1.2002 4.41165 1.2002C2.52554 1.2002 1.20112 2.5288 1.20112 4.4191C1.20112 7.68982 1.19904 10.9605 1.20112 14.2333C1.20112 15.9454 2.35351 17.2201 4.05723 17.3859C4.25206 17.4046 4.29144 17.4792 4.28936 17.6533C4.28315 18.5528 4.29351 19.4524 4.28315 20.3499C4.279 20.7271 4.38678 21.0359 4.74949 21.1935C5.12464 21.3551 5.42932 21.2142 5.70291 20.9364C6.80141 19.8296 7.91028 18.7352 9.00257 17.6222C9.1974 17.4294 9.38808 17.359 9.68862 17.4357ZM5.84385 18.5943C5.83763 18.4492 5.82934 18.358 5.82934 18.2647C5.82727 17.73 5.83556 17.1931 5.8252 16.6584C5.81483 16.1713 5.51637 15.8791 5.0293 15.8645C4.8096 15.8583 4.5899 15.8645 4.3702 15.8625C3.39191 15.85 2.74939 15.2137 2.74939 14.2396C2.74731 10.9481 2.74731 7.65873 2.74939 4.36728C2.74939 3.39726 3.40227 2.7485 4.37227 2.74643C8.42844 2.74436 12.4846 2.74436 16.5408 2.74643C17.5129 2.74643 18.172 3.38897 18.172 4.35899C18.1782 7.65873 18.1782 10.9605 18.172 14.2603C18.1699 15.0168 17.7429 15.6055 17.0631 15.7899C16.8455 15.85 16.6092 15.8583 16.3812 15.8583C13.9707 15.8645 11.5602 15.8687 9.14765 15.8563C8.75385 15.8542 8.45746 15.9765 8.18594 16.2604C7.49575 16.9776 6.78483 17.6719 6.08013 18.3746C6.01588 18.4388 5.94748 18.4989 5.84385 18.5943ZM19.7119 10.461C19.9793 10.461 20.199 10.4569 20.4166 10.461C20.9555 10.4735 21.2478 10.7678 21.2519 11.3046C21.2561 11.8021 21.254 12.2995 21.254 12.797C21.254 14.5567 21.2561 16.3164 21.2519 18.0761C21.2519 18.6503 20.9597 18.9363 20.3856 18.9425C20.1741 18.9446 19.9648 18.9384 19.7534 18.9446C19.256 18.9591 18.9513 19.2638 18.943 19.7591C18.9388 20.0431 18.943 20.325 18.943 20.6504C18.8207 20.5862 18.7378 20.5447 18.659 20.497C17.9295 20.0597 17.1958 19.6286 16.4703 19.1809C16.1988 19.013 15.9252 18.9342 15.604 18.9384C14.4267 18.9487 13.2515 18.9446 12.0742 18.9425C11.6411 18.9425 11.3115 18.7311 11.2618 18.3663C11.2182 18.0595 11.2535 17.7445 11.2535 17.4025C11.382 17.4025 11.4939 17.4025 11.6058 17.4025C13.2598 17.4025 14.9158 17.4087 16.5698 17.4004C18.3751 17.3921 19.7016 16.0594 19.7078 14.2561C19.7119 13.1079 19.7078 11.9596 19.7078 10.8134C19.7119 10.7097 19.7119 10.6082 19.7119 10.461Z"
                                    fill="#FFCB1F" stroke="#FFCB1F" stroke-width="0.2" />
                                <path
                                    d="M11.2327 10.7488C11.2327 10.6244 11.2306 10.5001 11.2327 10.3757C11.241 9.899 11.442 9.55286 11.8566 9.2917C12.8411 8.66989 13.2826 7.74753 13.1209 6.6034C12.9613 5.46756 12.2752 4.71517 11.1726 4.39183C9.73004 3.969 8.22944 4.84368 7.846 6.29872C7.71128 6.81275 7.91647 7.22314 8.36623 7.3475C8.80771 7.46772 9.18078 7.22729 9.33001 6.72777C9.49997 6.15777 9.92901 5.82614 10.4824 5.8365C10.9923 5.84687 11.4462 6.2013 11.5747 6.6946C11.7094 7.20863 11.4939 7.71023 10.9985 8.01077C10.1425 8.53101 9.72796 9.30413 9.69066 10.2928C9.67822 10.6079 9.68029 10.925 9.69066 11.24C9.70309 11.6753 10.014 11.9883 10.4285 12.0007C10.8576 12.0132 11.1913 11.7105 11.2244 11.267C11.2369 11.0949 11.2265 10.9229 11.2265 10.7509C11.2286 10.7488 11.2306 10.7488 11.2327 10.7488Z"
                                    fill="#FFCB1F" />
                                <path
                                    d="M11.2286 13.5393C11.2224 13.102 10.8659 12.7662 10.4285 12.7787C10.0036 12.7932 9.68031 13.1372 9.69067 13.5684C9.70104 13.9912 10.0534 14.329 10.4721 14.3207C10.8907 14.3125 11.2348 13.9559 11.2286 13.5393Z"
                                    fill="#FFCB1F" />
                            </svg>
                        </div>
                        <div class="support_card_group">
                            <div class="support_card">
                                <div class="support_name">Quick Start Guide</div>
                                <div class="support_right_arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         viewBox="0 0 16 16" fill="none">
                                        <path d="M6 12L10 8L6 4" stroke="#222222" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="support_card">
                                <div class="support_name">FAQ</div>
                                <div class="support_right_arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         viewBox="0 0 16 16" fill="none">
                                        <path d="M6 12L10 8L6 4" stroke="#222222" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tr_third_column max-lg:flex-grow max-lg:basis-5/12 max-[787px]:basis-full">
                <div class="zone_header">
                    <div class="zone_header_name">
                        Zones
                    </div>
                    <div class="zone_header_plus">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none">
                            <path
                                d="M18 12.998H13V17.998C13 18.2633 12.8946 18.5176 12.7071 18.7052C12.5196 18.8927 12.2652 18.998 12 18.998C11.7348 18.998 11.4804 18.8927 11.2929 18.7052C11.1054 18.5176 11 18.2633 11 17.998V12.998H6C5.73478 12.998 5.48043 12.8927 5.29289 12.7052C5.10536 12.5176 5 12.2633 5 11.998C5 11.7328 5.10536 11.4785 5.29289 11.2909C5.48043 11.1034 5.73478 10.998 6 10.998H11V5.99805C11 5.73283 11.1054 5.47848 11.2929 5.29094C11.4804 5.1034 11.7348 4.99805 12 4.99805C12.2652 4.99805 12.5196 5.1034 12.7071 5.29094C12.8946 5.47848 13 5.73283 13 5.99805V10.998H18C18.2652 10.998 18.5196 11.1034 18.7071 11.2909C18.8946 11.4785 19 11.7328 19 11.998C19 12.2633 18.8946 12.5176 18.7071 12.7052C18.5196 12.8927 18.2652 12.998 18 12.998Z"
                                fill="#262626" />
                        </svg>
                    </div>
                </div>
                <div class="zone_icon_list_group">
                    <div class="zone_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                             fill="none">
                            <path
                                d="M17.8492 4.56689L26.3359 10.2242C26.5185 10.346 26.6682 10.5109 26.7718 10.7045C26.8753 10.898 26.9295 11.1141 26.9295 11.3336C26.9295 11.553 26.8753 11.7691 26.7718 11.9626C26.6682 12.1562 26.5185 12.3211 26.3359 12.4429L17.8492 18.1016C17.3016 18.4667 16.6581 18.6616 15.9999 18.6616C15.3417 18.6616 14.6982 18.4667 14.1506 18.1016L5.66389 12.4429C5.48128 12.3211 5.33155 12.1562 5.228 11.9626C5.12444 11.7691 5.07026 11.553 5.07026 11.3336C5.07026 11.1141 5.12444 10.898 5.228 10.7045C5.33155 10.5109 5.48128 10.346 5.66389 10.2242L14.1506 4.56689C14.6982 4.20171 15.3417 4.00684 15.9999 4.00684C16.6581 4.00684 17.3016 4.20171 17.8492 4.56689ZM26.7012 16.2562C26.5034 16.5729 26.2413 16.8445 25.9319 17.0536L17.8652 22.4989C17.3143 22.8709 16.6647 23.0697 15.9999 23.0697C15.3351 23.0697 14.6855 22.8709 14.1346 22.4989L6.06789 17.0536C5.5851 16.7279 5.22221 16.2531 5.03465 15.7017C4.8471 15.1504 4.84519 14.5528 5.02923 14.0002L14.1506 20.0802C14.6626 20.4215 15.2592 20.6143 15.8741 20.6374C16.489 20.6604 17.0984 20.5128 17.6346 20.2109L17.8479 20.0802L26.9692 14.0002C27.0938 14.3727 27.1344 14.7682 27.088 15.1583C27.0417 15.5483 26.9096 15.9233 26.7012 16.2562ZM26.7012 20.5896C26.5034 20.9062 26.2413 21.1778 25.9319 21.3869L17.8652 26.8322C17.3143 27.2042 16.6647 27.403 15.9999 27.403C15.3351 27.403 14.6855 27.2042 14.1346 26.8322L6.06789 21.3869C5.5851 21.0612 5.22221 20.5864 5.03465 20.035C4.8471 19.4837 4.84519 18.8861 5.02923 18.3336L14.1506 24.4136C14.6626 24.7548 15.2592 24.9476 15.8741 24.9707C16.489 24.9938 17.0984 24.8462 17.6346 24.5442L17.8479 24.4136L26.9692 18.3336C27.0938 18.7061 27.1344 19.1015 27.088 19.4916C27.0417 19.8816 26.9096 20.2566 26.7012 20.5896Z"
                                fill="#FFCB1F" />
                        </svg>
                    </div>
                    <div class="zone_lists">
                        <div class="zone_list">
                            <div class="zone_name">Office</div>
                            <div class="zone_count">6</div>
                        </div>
                        <div class="zone_list">
                            <div class="zone_name">Welding area</div>
                            <div class="zone_count">2</div>
                        </div>
                        <div class="zone_list">
                            <div class="zone_name">Office 2</div>
                            <div class="zone_count">3</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tr_four_column max-lg:flex-grow max-lg:basis-5/12 max-[787px]:basis-full">
                <div class="first_card">
                    <div class="company_header">
                        <h4 class="company_title">Company</h4>
                        <p class="company_name">imangu</p>
                    </div>
                    <div class="company_icon_status_group">
                        <div class="company_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <g clip-path="url(#clip0_1813_28042)">
                                    <path
                                        d="M20.6668 5.33301H15.3335V6.66634H20.6668V20.6663H15.3335V21.9997H22.0002V6.66634C22.0002 6.31272 21.8597 5.97358 21.6096 5.72353C21.3596 5.47348 21.0205 5.33301 20.6668 5.33301Z"
                                        fill="#FFCB1F" stroke="#FFCB1F" stroke-width="0.5" />
                                    <path
                                        d="M13.2532 2H4.07984C3.705 2 3.34551 2.1489 3.08046 2.41396C2.81541 2.67901 2.6665 3.03849 2.6665 3.41333V22H14.6665V3.41333C14.6665 3.03849 14.5176 2.67901 14.2525 2.41396C13.9875 2.1489 13.628 2 13.2532 2ZM13.3332 20.6667H11.3332V18.6667H5.99984V20.6667H3.99984V3.41333C3.99984 3.40283 4.00191 3.39242 4.00593 3.38272C4.00995 3.37301 4.01584 3.36419 4.02327 3.35676C4.0307 3.34934 4.03952 3.34344 4.04922 3.33942C4.05893 3.3354 4.06933 3.33333 4.07984 3.33333H13.2532C13.2637 3.33333 13.2741 3.3354 13.2838 3.33942C13.2935 3.34344 13.3023 3.34934 13.3097 3.35676C13.3172 3.36419 13.3231 3.37301 13.3271 3.38272C13.3311 3.39242 13.3332 3.40283 13.3332 3.41333V20.6667Z"
                                        fill="#FFCB1F" stroke="#FFCB1F" stroke-width="0.5" />
                                    <path d="M5.3335 5.33301H6.66683V6.66634H5.3335V5.33301Z" fill="#FFCB1F" />
                                    <path d="M8 5.33301H9.33333V6.66634H8V5.33301Z" fill="#FFCB1F" />
                                    <path d="M10.6665 5.33301H11.9998V6.66634H10.6665V5.33301Z" fill="#FFCB1F" />
                                    <path d="M5.3335 8.66699H6.66683V10.0003H5.3335V8.66699Z" fill="#FFCB1F" />
                                    <path d="M8 8.66699H9.33333V10.0003H8V8.66699Z" fill="#FFCB1F" />
                                    <path d="M10.6665 8.66699H11.9998V10.0003H10.6665V8.66699Z" fill="#FFCB1F" />
                                    <path d="M5.3335 12H6.66683V13.3333H5.3335V12Z" fill="#FFCB1F" />
                                    <path d="M8 12H9.33333V13.3333H8V12Z" fill="#FFCB1F" />
                                    <path d="M10.6665 12H11.9998V13.3333H10.6665V12Z" fill="#FFCB1F" />
                                    <path d="M5.3335 15.333H6.66683V16.6663H5.3335V15.333Z" fill="#FFCB1F" />
                                    <path d="M8 15.333H9.33333V16.6663H8V15.333Z" fill="#FFCB1F" />
                                    <path d="M10.6665 15.333H11.9998V16.6663H10.6665V15.333Z" fill="#FFCB1F" />
                                    <path d="M15.3335 8.66699H16.6668V10.0003H15.3335V8.66699Z" fill="#FFCB1F" />
                                    <path d="M18 8.66699H19.3333V10.0003H18V8.66699Z" fill="#FFCB1F" />
                                    <path d="M15.3335 12H16.6668V13.3333H15.3335V12Z" fill="#FFCB1F" />
                                    <path d="M18 12H19.3333V13.3333H18V12Z" fill="#FFCB1F" />
                                    <path d="M15.3335 15.333H16.6668V16.6663H15.3335V15.333Z" fill="#FFCB1F" />
                                    <path d="M18 15.333H19.3333V16.6663H18V15.333Z" fill="#FFCB1F" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1813_28042">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="company_right_div">
                            <div class="right_group">
                                <p class="right_title">Active members</p>
                                <p class="right_text">12</p>
                            </div>
                            <div class="right_group">
                                <p class="right_title">Company created</p>
                                <p class="right_text">19 January 22</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second_card">
                    <div class="factory_map_title">
                        Factory map
                    </div>
                    <div class="factory_icon_image">
                        <div class="factory_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path
                                    d="M12.0335 21.6004C15.3118 21.6004 18.5902 21.6004 21.8714 21.6004C22.599 21.6004 22.7604 21.4362 22.7604 20.7086C22.7604 14.9219 22.7604 9.13522 22.7604 3.3457C22.7604 2.65209 22.5141 2.40862 21.8091 2.40862C15.3288 2.40862 8.8363 2.39073 2.35883 2.40771C2.18997 2.40771 2.05729 2.40771 1.87645 2.40771C1.58202 2.40772 1.34327 2.64641 1.34328 2.94084C1.34328 2.94084 1.34338 3.24661 1.34338 3.41365C1.34338 9.17486 1.34338 14.9361 1.34338 20.6973C1.34338 21.4673 1.47361 21.6004 2.24083 21.6004C5.49938 21.6004 8.76642 21.6004 12.0335 21.6004ZM8.20871 3.74771C10.8473 3.74771 13.5934 3.74771 16.2461 3.74771C16.2461 4.77822 16.2433 5.77192 16.2461 6.76279C16.2489 7.23841 16.515 7.54133 16.9822 7.55266C17.7267 7.56965 18.4713 7.56681 19.2159 7.55266C19.5924 7.547 19.9293 7.33658 19.9293 6.89585C19.9293 6.48375 19.5046 6.26736 19.1083 6.26169C18.6044 6.25603 18.1004 6.26169 17.5823 6.26169C17.5823 5.3869 17.5823 4.57155 17.5823 3.74205C18.845 3.74205 20.0793 3.74205 21.3335 3.74205C21.3335 9.26828 21.3335 14.7605 21.3335 20.2641C19.7764 20.2641 18.2448 20.2641 16.7019 20.2641C16.6962 20.1367 16.6877 20.049 16.6877 19.9584C16.6877 19.0581 16.6849 18.155 16.6906 17.2547C16.6934 16.8612 16.2942 16.513 15.9602 16.5328C15.4987 16.5611 15.3033 16.7621 15.2977 17.249C15.2949 17.7332 15.2949 18.2173 15.2949 18.6986C15.2949 19.2166 15.2949 19.7347 15.2949 20.267C15.1193 20.2811 14.9919 20.2981 14.8617 20.2981C10.9294 20.2981 6.99701 20.2981 3.06467 20.2953C2.87548 20.2953 2.72211 20.142 2.72211 19.9528C2.72211 19.8633 2.72211 19.7489 2.72211 19.562C2.7306 18.8175 2.72494 18.0729 2.72211 17.3283C2.72211 17.0565 2.78722 16.9065 3.12129 16.9065C5.10586 16.9206 7.09327 16.915 9.07784 16.9065C9.37793 16.9065 9.51382 17.0027 9.49684 17.3113C9.48268 17.5859 9.51666 17.8634 9.48835 18.1323C9.48835 18.4903 9.40792 18.7564 9.67967 19.0343C9.91645 19.2764 10.3322 19.2829 10.5923 19.066C10.7228 18.9573 10.8147 18.8124 10.8133 18.5825C10.8105 17.903 10.8218 17.2236 10.8105 16.5441C10.802 16.06 10.5019 15.7797 10.0178 15.7797C7.78405 15.7769 5.55034 15.7741 3.3138 15.7826C3.00521 15.7826 2.81836 15.82 2.72211 15.5652C2.72211 15.2028 2.71644 15.0776 2.71644 14.8936C2.72211 13.5092 2.71928 12.1248 2.71928 10.7376C2.71928 10.2054 2.71928 10.2054 3.26001 10.2054C6.02879 10.2054 8.8004 10.2025 11.5692 10.2054C11.7079 10.2054 11.8438 10.228 12.0108 10.2422C12.0108 10.4403 12.0108 10.5932 12.0108 10.7489C12.0108 12.1984 12.008 13.6508 12.0137 15.1003C12.0165 15.6099 12.2373 15.8194 12.7469 15.8165C13.231 15.8165 13.415 15.624 13.415 15.1059C13.4179 13.6423 13.415 12.1786 13.415 10.715C13.415 10.5621 13.415 10.412 13.415 10.2082C13.7038 10.2082 13.8001 10.2004 14.1681 10.2054C14.6715 10.2054 15.1054 10.2004 15.7054 10.2004C16.6735 10.2004 16.6607 9.50649 16.4896 9.25979C16.297 8.98235 16.0338 8.91157 15.7054 8.91157C11.5494 8.91723 7.39619 8.91723 3.24019 8.9144C3.12129 8.9144 2.98995 8.89969 2.94265 8.85239C2.81808 8.74198 2.73343 8.62563 2.71644 8.46992C2.71644 8.26589 2.71361 8.04809 2.71644 7.83576C2.72777 6.60708 2.72211 5.3784 2.72211 4.15255C2.72211 4.01383 2.73626 3.87794 2.74192 3.75054C4.14613 3.75054 5.50787 3.75054 6.8866 3.75054C6.8866 4.48096 6.8866 5.16041 6.8866 5.83987C6.8866 6.19658 7.06779 6.44571 7.41884 6.45138C9.22223 6.46836 11.0256 6.47119 12.829 6.45421C13.1432 6.45138 13.3754 6.24754 13.4122 5.90498C13.449 5.5426 13.2508 5.28781 12.9168 5.27648C11.4001 5.27648 10.0942 5.30763 8.6758 5.27648C8.20871 5.27648 8.27396 5.18306 8.20871 5.18306C8.20871 4.60252 8.20871 4.0071 8.20871 3.74771Z"
                                    fill="#FFCB1F" stroke="#FFCB1F" stroke-width="0.25" />
                            </svg>
                        </div>
                        <div class="factory_map">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--        Contaminate Modal-->
        <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="contaminate">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="storeUtility.closeModal('contaminate')">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <div class="bg-white p-6">
                        <div class="flex gap-4 mb-4">
                            <div class="bg-[#FFCB1F] rounded p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M5.5445 2.95605C4.0942 2.95605 2.91431 4.13603 2.91431 5.58624C2.91431 5.76795 3.06135 5.91499 3.24305 5.91499C3.42475 5.91499 3.57179 5.76795 3.57179 5.58624C3.57179 4.49846 4.45663 3.61362 5.54441 3.61362C5.72612 3.61362 5.87316 3.46658 5.87316 3.28488C5.87316 3.10318 5.72628 2.95605 5.5445 2.95605Z" fill="#262622"/>
                                    <path d="M8.83228 14.6278C8.83228 14.8095 8.97931 14.9566 9.16102 14.9566C9.34272 14.9566 9.48976 14.8095 9.48976 14.6278C9.48976 13.087 10.7435 11.8333 12.2843 11.8333C12.466 11.8333 12.6131 11.6862 12.6131 11.5045C12.6131 11.3228 12.466 11.1758 12.2843 11.1758C10.3808 11.1757 8.83228 12.7242 8.83228 14.6278Z" fill="#262622"/>
                                    <path d="M15.7534 6.38315C17.2942 6.38315 18.548 5.12937 18.548 3.58859C18.548 2.04781 17.2942 0.793945 15.7534 0.793945C14.2126 0.793945 12.9589 2.04773 12.9589 3.58851C12.9589 3.59729 12.9601 3.60584 12.9602 3.61463L9.20121 4.36642C8.74634 2.68983 7.21557 1.45151 5.39698 1.45151C3.22142 1.45151 1.45166 3.22127 1.45166 5.39684C1.45166 7.5724 3.22142 9.34216 5.39698 9.34216C6.10614 9.34216 6.77046 9.15151 7.34617 8.82268L8.87857 10.968C7.95231 11.8382 7.36969 13.0701 7.36969 14.4382C7.36969 17.0667 9.50831 19.2054 12.1369 19.2054C14.7656 19.2054 16.9042 17.0668 16.9042 14.4382C16.9042 12.6383 15.901 11.0689 14.4248 10.2578L15.717 6.38136C15.7293 6.38144 15.7412 6.38315 15.7534 6.38315ZM15.7534 1.45151C16.9318 1.45151 17.8905 2.41024 17.8905 3.58859C17.8905 4.76694 16.9318 5.72566 15.7534 5.72566C14.5751 5.72566 13.6164 4.76694 13.6164 3.58859C13.6164 2.41024 14.5752 1.45151 15.7534 1.45151ZM5.39698 8.68459C3.58426 8.68459 2.10923 7.20956 2.10923 5.39684C2.10923 3.58403 3.58418 2.10908 5.39698 2.10908C7.20979 2.10908 8.68474 3.58403 8.68474 5.39684C8.68482 7.20964 7.20979 8.68459 5.39698 8.68459ZM16.2466 14.4382C16.2466 16.7043 14.403 18.5479 12.1369 18.5479C9.87074 18.5479 8.02717 16.7043 8.02717 14.4382C8.02717 12.172 9.87074 10.3285 12.1369 10.3285C14.4031 10.3285 16.2466 12.172 16.2466 14.4382ZM13.823 9.98459C13.2979 9.78507 12.7311 9.6709 12.1369 9.6709C11.113 9.6709 10.1658 9.99851 9.38796 10.5501L7.88933 8.45203C8.77531 7.72798 9.34239 6.62767 9.34239 5.39684C9.34239 5.26713 9.33523 5.13921 9.32294 5.01268L13.046 4.26804C13.2944 5.25639 14.0687 6.03561 15.0543 6.29103L13.823 9.98459Z" fill="#262622" stroke="#262622" stroke-width="0.5"/>
                                    <path d="M14.7502 4.107C14.9319 4.107 15.079 3.95996 15.079 3.77825C15.079 3.32493 15.4476 2.95631 15.9009 2.95631C16.0826 2.95631 16.2296 2.80927 16.2296 2.62757C16.2296 2.44587 16.0826 2.29883 15.9009 2.29883C15.0851 2.29883 14.4214 2.9625 14.4214 3.77833C14.4214 3.95996 14.5684 4.107 14.7502 4.107Z" fill="#262622"/>
                                </svg>
                            </div>
                            <div class="">
                                <h1 class="text-xl font-bold">Volatile organic compounds</h1>
                            </div>
                        </div>
                        <div>
                            What is particulate matter? Particulate matter consists of microscopic dust particles that are often invisible to the naked eye. These particles can remain suspended in the air for a long time. Depending on the size and chemical composition, these particles can be hazardous to health.
                        </div>{{storeDashboard?.lists?.data?.[0]?.id}}
                        <div class="mt-[58px] flex items-center h-12 justify-between">
                            <div class="flex items-center gap-5">
                                <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 18L9 12L15 6" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span :class="['w-2.5 h-2.5 rounded-full cursor-pointer',
                                {
                                    'bg-[#FFCB1F]': storeDashboard?.lists?.all_contaminates?.data?.index?.id === storeDashboard?.lists?.data?.index?.id,
                                    'bg-amber-800': storeDashboard?.lists?.all_contaminates?.data?.index?.id !== storeDashboard?.lists?.data?.index?.id
                                }
                                ]" v-for="(item, index) in storeDashboard?.lists?.all_contaminates?.data" :key="index" @click="alert(item.id)"></span>
                                <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 18L15 12L9 6" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div>
                                <button class="w-[148px] bg-[#262626] py-3.5 rounded text-white text-base font-bold" @click="storeUtility.closeModal('contaminate')">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style lang="scss">
.main_content{
    .first_row {
        width: 100%;
        padding: 2rem 2.5rem 2rem 2rem;
        background: #fff;

        .first_row_title {
            font-size: 1.375rem;
            font-weight: 700;
        }

    }

    .second_row {
        margin: 2rem 2.5rem 1.5rem 1.5rem;
        display: flex;
        gap: 1.5rem;

        .sr_first_column {
            display: flex;
            flex-direction: column;
            flex-grow: 1;

            .device_main {
                background: #fff;
                border-radius: 0.25rem;
                border: 0.0625rem solid #E2E2E2;
                padding: 1rem;
                margin-bottom: 1.5625rem;

                .device_main_title {
                    margin-bottom: 0.5rem;
                    font-weight: 700;
                }

                .device_main_group {
                    display: flex;
                    justify-content: space-evenly;
                    gap: 1.375rem;

                    .first {
                        display: flex;
                        flex-direction: column;
                        width: 5.375rem;
                        height: 5.375rem;
                        background: #41D583;
                        border-radius: 0.5rem;
                        padding: 1.25rem 3.625rem 1.875rem 1rem;

                        .count {
                            font-size: 2.125rem;
                            line-height: 2.25rem;
                            font-weight: 700;
                        }

                        .status {
                            font-size: 0.875rem;
                            font-weight: 700;
                        }
                    }

                    .second {
                        display: flex;
                        flex-direction: column;
                        width: 5.375rem;
                        height: 5.375rem;
                        background: #F8B25F;
                        border-radius: 0.5rem;
                        padding: 1.25rem 3.625rem 1.875rem 1rem;

                        .count {
                            font-size: 2.125rem;
                            line-height: 2.25rem;
                            font-weight: 700;
                        }

                        .status {
                            font-size: 0.875rem;
                            font-weight: 700;
                        }
                    }

                    .third {
                        display: flex;
                        flex-direction: column;
                        width: 5.375rem;
                        height: 5.375rem;
                        background: #FC3848;
                        border-radius: 0.5rem;
                        padding: 1.25rem 3.625rem 1.875rem 1rem;

                        .count {
                            font-size: 2.125rem;
                            line-height: 2.25rem;
                            font-weight: 700;
                            color: white;
                        }

                        .status {
                            font-size: 0.875rem;
                            font-weight: 700;
                            color: white;
                        }
                    }
                }
            }

            .alerts {
                background: #fff;
                border-radius: 0.25rem;
                border: 0.0625rem solid #E2E2E2;
                padding: 1rem;
                flex-grow: 1;

                .alert_title {
                    font-weight: 700;
                    line-height: 1.375rem;
                    margin-bottom: 0.5625rem;
                }

                .alert_two_cards {
                    display: flex;
                    gap: 1.5rem;

                    .card_one {
                        border: 0.0625rem solid #E2E2E2;
                        border-left: 1rem solid #F8B25F;
                        border-radius: 0.25rem;
                        padding: 0.5rem 0 0.5rem 1rem;
                        width: 100%;

                        .alert_count {
                            font-size: 2.125rem;
                            font-weight: 700;
                            line-height: 2.25rem;
                        }

                        .alert_status {
                            font-size: 0.75rem;
                            color: rgba(38, 38, 38, 0.70);
                        }

                        .alert_time_ago {
                            font-size: 0.75rem;
                            font-weight: 700;
                        }
                    }

                    .card_two {
                        border: 0.0625rem solid #E2E2E2;
                        border-left: 1rem solid #FC3848;
                        border-radius: 0.25rem;
                        padding: 0.5rem 0 0.5rem 1rem;
                        width: 100%;

                        .alert_count {
                            font-size: 2.125rem;
                            font-weight: 700;
                            line-height: 2.25rem;
                        }

                        .alert_status {
                            font-size: 0.75rem;
                            color: rgba(38, 38, 38, 0.70);
                        }

                        .alert_time_ago {
                            font-size: 0.75rem;
                            font-weight: 700;
                        }
                    }
                }

                .alert_description {
                    color: rgba(38, 38, 38, 0.70);
                }
            }
        }

        .sr_second_column {
            background: #fff;
            border-radius: 0.25rem;
            border: 0.0625rem solid #E2E2E2;
            padding: 1rem;
            flex-grow: 1;

            .device_header {
                display: flex;
                justify-content: space-between;

                .device_header_name {
                    font-weight: 700;
                }
            }

            .ellipse {
                margin-top: 1.875rem;
                display: flex;
                justify-content: center;
                position: relative;

                .circle {
                    .device_image {
                        position: absolute;
                        top: 25%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        width: 1.5rem;
                        height: 2.7656rem;
                    }

                    .device_count {
                        position: absolute;
                        top: 58%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        font-size: 3rem;
                        font-weight: 700;
                        line-height: normal;
                    }

                    .device_name {
                        position: absolute;
                        top: 80%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                    }
                }
            }

            .active_inactive {
                display: flex;
                gap: 2rem;
                justify-content: center;
                margin-top: 1.5rem;

                .active_group {
                    display: flex;
                    align-items: center;
                    gap: 0.5rem;

                    .active {
                        color: rgb(38, 38, 38, 0.70);

                        b {
                            color: black;
                        }
                    }
                }

                .inactive_group {
                    display: flex;
                    align-items: center;
                    gap: 0.5rem;

                    .inactive {
                        color: rgb(38, 38, 38, 0.70);

                        b {
                            color: black;
                        }
                    }
                }

            }
        }

        .sr_third_column {
            background: #fff;
            border-radius: 0.25rem;
            border: 0.0625rem solid #E2E2E2;
            padding: 1.25rem 1rem 1.5rem 1rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            height: 330px;

            .contaminate_header {
                display: flex;
                justify-content: space-between;
                margin-bottom: 0.75rem;

                .contaminate_header_name {
                    color: rgba(38, 38, 38, 0.70);
                    font-size: 0.75rem;
                    font-weight: 700;
                    text-transform: uppercase;
                }

                .contaminate_header_arrows .arrow_group {
                    display: flex;
                    gap: 0.5rem;

                    svg {
                        //cursor: pointer;
                    }
                }
            }

            .contaminate_logo_title {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                margin-bottom: 0.5rem;

                .contaminate_title {
                    font-weight: 700;
                }
            }

            .contaminate_description {
                font-size: 0.875rem;
                flex-grow: 1;
                height: auto;
                overflow: auto;
            }

            .contaminate_footer {
                display: flex;
                justify-content: flex-end;
                align-items: flex-end;
                margin-top: 0.875rem;

                .read_more_group {
                    display: flex;
                    align-items: center;
                    gap: 0.5rem;
                    cursor: pointer;

                    .read_more {
                        font-size: 0.875rem;
                        font-weight: 700;
                    }
                }
            }
        }
    }

    .third_row {
        margin: 0 2.5rem 1.5rem 1.5rem;
        display: flex;
        gap: 1.5rem;

        .tr_first_column {
            background: #fff;
            border-radius: 0.25rem;
            border: 0.0625rem solid #E2E2E2;
            padding: 1rem;

            .shop_title {
                font-weight: 700;
            }

            .icon_name_info {
                display: flex;
                align-items: center;
                margin-bottom: 0.625rem;

                .shop_icon {
                    padding: 0.5rem;
                    flex-basis: 3.4375rem;
                }

                .shop_name {
                    font-size: 0.875rem;
                    font-weight: 700;
                    display: flex;
                    flex-basis: 10.625rem;
                }
            }

            .three_boxes {
                display: flex;
                justify-content: space-evenly;
                gap: 1rem;
                margin-bottom: 1.5rem;

                .box_one {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    border: 0.0625rem solid #41D583;
                    border-radius: 0.25rem;
                    border-left-width: 0.375rem;
                    padding: 0.5rem;
                    width: 100%;
                    height: 6.5rem;

                    .count {
                        font-size: 2.5rem;
                        font-weight: 700;
                        line-height: 2.25rem;
                        color: #41D583;
                    }

                    .status {
                        font-size: 0.75rem;
                    }
                }

                .box_two {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    border: 0.0625rem solid #F8B25F;
                    border-radius: 0.25rem;
                    border-left-width: 0.375rem;
                    padding: 0.5rem;
                    width: 100%;
                    height: 6.5rem;

                    .count {
                        font-size: 2.5rem;
                        font-weight: 700;
                        line-height: 2.25rem;
                        color: #F8B25F;
                    }

                    .status {
                        font-size: 0.75rem;
                    }
                }

                .box_three {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    border: 0.0625rem solid #FC3848;
                    border-radius: 0.25rem;
                    border-left-width: 0.375rem;
                    padding: 0.5rem;
                    width: 100%;
                    height: 6.5rem;

                    .count {
                        font-size: 2.5rem;
                        font-weight: 700;
                        line-height: 2.25rem;
                        color: #FC3848;
                    }

                    .status {
                        font-size: 0.75rem;
                    }
                }
            }

            .two_cards {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;

                .first_card_group {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 0.25rem 0.5rem 0.25rem 1rem;
                    background: #FAFAFA;
                    border-radius: 0.25rem;

                    .first_card {
                        display: flex;
                        flex-direction: column;

                        .name {
                            font-size: 0.875rem;
                            font-weight: 700;
                        }

                        .status {
                            color: rgba(38, 38, 38, 0.70);
                            font-size: 0.875rem;
                        }
                    }

                    .right_arrow {
                        cursor: pointer;
                    }
                }

                .second_card_group {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 0.25rem 0.5rem 0.25rem 1rem;
                    background: #FAFAFA;
                    border-radius: 0.25rem;

                    .second_card {
                        display: flex;
                        flex-direction: column;

                        .name {
                            font-size: 0.875rem;
                            font-weight: 700;
                        }

                        .status {
                            color: rgba(38, 38, 38, 0.70);
                            font-size: 0.875rem;
                        }
                    }

                    .right_arrow {
                        cursor: pointer;
                    }
                }
            }
        }

        .tr_second_column_group {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            flex-grow: 1;

            .first_card {
                background: #fff;
                border-radius: 0.25rem;
                border: 0.0625rem solid #E2E2E2;
                padding: 1rem;

                .title {
                    font-weight: 700;
                }

                .icon_status_timestamp {
                    display: flex;
                    align-items: center;
                    gap: 0.75rem;
                    margin-top: 0.75rem;
                    margin-bottom: 0.875rem;

                    .icon {
                        padding: 0.5rem;
                    }

                    .status_timestamp {
                        display: flex;
                        flex-direction: column;

                        .active_status {
                            display: flex;
                            align-items: center;
                            gap: 0.5rem;

                            .active {
                                font-size: 0.875rem;
                                font-weight: 700;
                            }
                        }

                        .time_stamp {
                            color: rgba(38, 38, 38, 0.70);
                            font-size: 0.875rem;
                        }
                    }
                }

                .two_cards {
                    display: flex;
                    flex-direction: column;
                    gap: 0.5rem;

                    .tc_first_card {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 0.25rem 0.5rem 0.25rem 1rem;
                        background: #FAFAFA;
                        border-radius: 0.25rem;

                        .text {
                            font-size: 0.875rem;
                            font-weight: 700;
                        }
                    }

                    .tc_second_card {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 0.25rem 0.5rem 0.25rem 1rem;
                        background: #FAFAFA;
                        border-radius: 0.25rem;

                        .text {
                            font-size: 0.875rem;
                            font-weight: 700;
                        }
                    }
                }
            }

            .support {
                background: #fff;
                border-radius: 0.25rem;
                border: 0.0625rem solid #E2E2E2;
                padding: 1rem;
                flex-grow: 1;

                .support_title {
                    font-weight: 700;
                }

                .support_icon_cards {
                    margin-top: 0.75rem;
                    display: flex;
                    gap: 0.75rem;

                    .support_icon {
                        padding: 0.5625rem;
                    }

                    .support_card_group {
                        display: flex;
                        flex-direction: column;
                        gap: 0.5rem;
                        width: 100%;
                        margin-top: 0.5625rem;

                        .support_card {
                            display: flex;
                            align-items: center;
                            justify-content: space-between;
                            background: #FAFAFA;
                            border-radius: 0.25rem;

                            .support_name {
                                font-size: 0.875rem;
                                font-weight: 700;
                            }
                        }
                    }
                }
            }
        }

        .tr_third_column {
            background: #fff;
            border-radius: 0.25rem;
            border: 0.0625rem solid #E2E2E2;
            padding: 1rem;
            flex-grow: 1;

            .zone_header {
                display: flex;
                justify-content: space-between;

                .zone_header_name {
                    font-weight: 700;
                }
            }

            .zone_icon_list_group {
                display: flex;
                gap: 0.75rem;
                margin-top: 0.6875rem;

                .zone_icon {
                    padding: 0.3125rem;
                }

                .zone_lists {
                    display: flex;
                    flex-direction: column;
                    flex-grow: 1;
                    gap: 0.3125rem;

                    .zone_list {
                        display: flex;
                        justify-content: space-between;
                        padding: 0.25rem 1rem;
                        background: #FAFAFA;
                        border-radius: 0.25rem;

                        .zone_name {
                            font-size: 0.875rem;
                            font-weight: 700;
                        }

                        .zone_count {
                            font-size: 0.875rem;
                        }
                    }
                }
            }
        }

        .tr_four_column {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            flex-grow: 1;

            .first_card {
                background: #fff;
                border-radius: 0.25rem;
                border: 0.0625rem solid #E2E2E2;
                padding: 1rem;
                flex-grow: 1;

                .company_header {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    margin-bottom: 0.75rem;

                    .company_title {
                        font-weight: 700;
                    }

                    .company_name {
                        font-size: 0.875rem;
                        font-weight: 700;
                    }
                }

                .company_icon_status_group {
                    display: flex;
                    justify-content: space-between;

                    .company_icon {
                        padding: 0.5625rem;
                    }

                    .company_right_div {
                        display: flex;
                        flex-direction: column;
                        gap: 0.3125rem;

                        .right_group {
                            display: flex;
                            flex-direction: column;
                            align-items: flex-end;

                            .right_title {
                                font-size: 0.875rem;
                                font-weight: 700;
                                text-align: right;
                            }

                            .right_text {
                                color: rgba(38, 38, 38, 0.70);
                                font-size: 0.875rem;
                            }
                        }
                    }
                }
            }

            .second_card {
                background: #fff;
                border-radius: 0.25rem;
                border: 0.0625rem solid #E2E2E2;
                padding: 1rem;
                flex-grow: 1;

                .factory_map_title {
                    font-weight: 700;
                }

                .factory_icon_image {
                    display: flex;
                    gap: 1rem;
                    justify-content: space-between;
                    margin-top: 0.75rem;

                    .factory_icon {
                        padding: 0.5625rem;
                    }

                    .factory_map {
                        width: 100%;
                        height: 5.6875rem;
                        background: black;
                    }
                }
            }
        }
    }
}
</style>
