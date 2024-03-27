<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Header from '../Header.vue';
import Footer from '../Footer.vue';

</script>

<template>
    <Head title="レッスン料金" />

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
                lg:py-28
                ">

                <div class="
                    inner
                    flex
                    flex-col
                    items-center
                    ">

                    <div class="
                        heading-outer
                        w-48 h-16
                        mb-12 mx-auto
                        border-silver-2
                        ">
                        <div class="
                            heading
                            bg-black
                            w-full h-full
                            text-center content-center font-bold
                            ">
                            <h1 class="
                                text-3xl text-silver
                                ">Price</h1>
                            <p class="
                                text
                                text-silver
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
