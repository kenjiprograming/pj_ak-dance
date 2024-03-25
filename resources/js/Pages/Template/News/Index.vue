<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Header from '../Header.vue';
import Footer from '../Footer.vue';

defineProps({
    news: Array,
})

</script>

<template>
    <Head title="AK-DANCE" />

    <Header />

    <div class="
        main-wrapper
        h-screen
        bg-black
        text-slate-500
        ">

        <div class="
            contents-wrapper
            ">

            <div id="news-under-wrapper" class="
                news-under-wrapper
                py-10
                ">

                <div class="
                    inner
                    ">

                    <div class="
                        news-wrapper
                        px-2 py-4
                        lg:px-16 lg:pt-32 lg:mb-28
                        ">
                        <div class="
                            inner
                            lg:py-8 lg:px-16
                            lg:border lg:border-slate-500
                            ">

                            <div class="
                                heading-outer
                                flex justify-center
                                ">
                                <div class="
                                    heading
                                    bg-white
                                    w-44 py-1 mb-4
                                    border-4 border-slate-500
                                    text-center text-slate-500 font-bold
                                    ">
                                    <h1 class="
                                        text-3xl
                                        ">News</h1>
                                    <p class="
                                        text
                                        -mt-2
                                        ">お知らせ一覧</p>
                                </div>
                            </div>

                            <div class="
                                list
                                py-2
                                ">

                                <div v-for="n in news" class="
                                    item
                                    border-s-2 border-slate-500
                                    ps-2 ms-1 mb-4
                                    lg:mb-6
                                    ">
                                    <div v-if="n.status === 'public'" class="
                                        lg:flex
                                        ">
                                        <p class="
                                            date
                                            lg:content-center
                                            ">{{ new Date(n.public_date).toLocaleDateString('sv-SE') }}</p>
                                        <Link :href="route('news.detail', n)" class="
                                            text
                                            text-lg font-semibold
                                            underline
                                            lg:ms-8
                                            ">{{ n.title }}</Link>
                                    </div>
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
