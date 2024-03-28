<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Header from '../Header.vue';
import Footer from '../Footer.vue';
import Heading from '../../../Components/Heading.vue';

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
                px-2
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

                                <Heading
                                    bigText="News"
                                    smallText="お知らせ一覧" />

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
