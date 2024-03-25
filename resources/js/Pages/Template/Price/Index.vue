<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Header from '../Header.vue';
import Footer from '../Footer.vue';

</script>

<template>
    <Head title="AK-DANCE" />

    <Header />

    <div class="
        main-wrapper
        ">

        <div class="
            contents-wrapper
            ">

            <div id="price-under-wrapper" class="
                price-under-wrapper
                bg-black
                text-slate-500
                py-10
                lg:pt-32 lg:mb-28
                ">

                <div class="
                    inner
                    flex
                    flex-col
                    items-center
                    ">

                    <div class="
                        heading-outer
                        flex justify-center
                        lg:block
                        lg:mb-6
                        ">
                        <div class="
                            heading
                            bg-white
                            w-44 py-1 mb-4
                            border-4 border-slate-500
                            text-center text-slate-500 font-bold
                            lg:mb-0
                            ">
                            <h1 class="
                                text-3xl
                                ">Price</h1>
                            <p class="
                                text
                                -mt-2
                                ">レッスン料金</p>
                        </div>
                    </div>

                    <div class="
                        max-lg:w-11/12 max-lg:my-6
                        max-lg:overflow-scroll
                        ">
                        <img src="/images/price-table.svg" alt="レッスン料金表" class="
                            max-lg:max-w-none
                        ">
                    </div>

                </div>

            </div>

        </div>

    </div>

    <Footer />

</template>
