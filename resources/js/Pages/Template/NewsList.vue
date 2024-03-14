<script setup>
import { computed, ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import Header from './Header.vue';
import Footer from './Footer.vue';

let news = ref('')

</script>

<template>
    <Head title="AK-DANCE" />

    <Header />

    <div class="
        main-wrapper
        bg-black
        text-slate-500
        ">

        <div class="contents-wrapper">

            <div id="news-under-wrapper" class="
                news-under-wrapper
                py-10
                ">

                <div class="inner">

                    <div id="news-wrapper" class="
                        news-wrapper
                        px-2 py-4
                        ">
                        <div class="
                            inner
                            ">

                            <div class="
                                heading-outer
                                flex
                                justify-center
                                ">
                                <div class="
                                    heading
                                    bg-white
                                    border-4
                                    border-slate-500
                                    w-56
                                    text-center
                                    text-slate-500
                                    font-bold
                                    ">
                                    <h1 class="
                                        text-3xl
                                        ">News</h1>
                                    <p class="
                                        text
                                        ">お知らせ一覧</p>
                                </div>
                            </div>

                            <div class="
                                list
                                py-2
                                ">

                                <div class="
                                    item
                                    ms-1
                                    border-s-2
                                    border-slate-500
                                    ps-2
                                    mb-3
                                    ">
                                    <p class="
                                        date
                                        mb-1
                                        ">2024.01.10</p>
                                    <Link :href="route('news.detail', 1)" class="
                                        text
                                        underline
                                        ">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</Link>
                                </div>

                                <div class="
                                    item
                                    ms-1
                                    border-s-2
                                    ps-2
                                    mb-3
                                    ">
                                    <p class="
                                        date
                                        mb-1
                                        ">2024.01.10</p>
                                    <p class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                </div>
                                <div class="
                                    item
                                    ms-1
                                    border-s-2
                                    ps-2
                                    mb-3
                                    ">
                                    <p class="
                                        date
                                        mb-1
                                        ">2024.01.10</p>
                                    <p class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                </div>
                                <div class="
                                    item
                                    ms-1
                                    border-s-2
                                    ps-2
                                    mb-3
                                    ">
                                    <p class="
                                        date
                                        mb-1
                                        ">2024.01.10</p>
                                    <p class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                </div>
                                <div class="
                                    item
                                    ms-1
                                    border-s-2
                                    ps-2
                                    mb-3
                                    ">
                                    <p class="
                                        date
                                        mb-1
                                        ">2024.01.10</p>
                                    <p class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                </div>
                                <div class="
                                    item
                                    ms-1
                                    border-s-2
                                    ps-2
                                    mb-3
                                    ">
                                    <p class="
                                        date
                                        mb-1
                                        ">2024.01.10</p>
                                    <p class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <Footer />

</template>
