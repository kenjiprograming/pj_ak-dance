<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Header from '../Header.vue';
import Footer from '../Footer.vue';

defineProps({
    news: Array,
})

</script>

<template>
    <Head title="お知らせ一覧" />

    <Header />

    <div class="
        main-wrapper
        h-screen
        bg-black
        ">

        <div class="
            contents-wrapper
            ">

            <div id="news-under-wrapper" class="
                news-under-wrapper
                py-10 px-2
                lg:max-w-7xl lg:mx-auto
                lg:px-16 lg:mb-28
                ">

                <div class="
                    inner
                    ">

                    <div class="
                        news-wrapper
                        px-2 py-4
                        lg:px-16 lg:pt-24 lg:mb-28
                        ">
                        <div class="
                            inner
                            lg:border-silver-1
                            ">

                            <div class="
                                bg-black
                                lg:px-16 py-20
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
                                            ">News</h1>
                                        <p class="
                                            text
                                            text-silver
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
                                        border-silver-1
                                        p-0 mb-6
                                        ">

                                        <div v-if="n.status === 'public'" class="
                                            lg:flex
                                            ps-2 ms-0.5
                                            bg-black
                                            ">

                                            <p class="
                                                date
                                                lg:content-center
                                                text-silver
                                                ">{{ new Date(n.public_date).toLocaleDateString('sv-SE') }}</p>

                                            <Link :href="route('news.detail', n)" class="
                                                text
                                                text-lg font-semibold text-silver
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
    </div>

    <Footer />

</template>
