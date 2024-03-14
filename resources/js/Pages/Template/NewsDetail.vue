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

            <div id="news-detail-wrapper" class="
                news-detail-wrapper
                py-10
                px-2
                ">

                <div class="inner
                    border-t
                    border-s
                    border-slate-500
                    p-2
                    ">

                    <div class="
                        detail-heading-outer
                        mb-6
                        ">
                        <div class="
                            heading
                            ">
                            <h1 class="
                                text-3xl
                                font-extrabold
                                ">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h1>
                        </div>
                    </div>

                    <div class="
                        detail-date-outer
                        flex
                        flex-row-reverse
                        mb-6
                        ">
                        <div class="
                            text
                            ">2024.01.10</div>
                    </div>

                    <div class="content-outer">

                        <div class="
                            content-inner
                            mb-8
                            ">

                            <div class="
                                heading
                                text-2xl
                                mb-3
                                ">
                                <h2>小見出し１</h2>
                            </div>

                            <div class="
                                content
                                ">
                                <p class="
                                    text
                                    ">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            </div>
                        </div>

                        <div class="
                            content-inner
                            mb-6
                            ">

                            <div class="
                                heading
                                text-2xl
                                mb-3
                                ">
                                <h1>小見出し2</h1>
                            </div>

                            <div class="
                                content
                                ">
                                <p class="
                                    text
                                    ">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="
                    button-outer
                    flex
                    justify-center
                    ">
                    <Link :href="route('news.list')" class="
                        button-medium
                        text-slate-500
                        border-2
                        border-slate-500
                        py-3 px-8
                        w-30
                        hover:bg-white
                        ">
                        <p>一覧へ戻る</p>
                    </Link>
                </div>

            </div>

        </div>
    </div>

    <Footer />

</template>
