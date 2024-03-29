<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { marked } from 'marked';
import Header from '../Header.vue';
import Footer from '../Footer.vue';

defineProps({
    news: Object,
})

const renderer = new marked.Renderer()
const originalHeading = renderer.heading.bind(renderer)
renderer.heading = (text, level, raw, slugger) => {
    console.log(level);
    let mapping = {
        1: 'text-3xl mt-4',
        2: 'text-2xl mt-2',
        3: 'text-xl mt-1',
    }
    if (level !== null) {
        return `<h${level} class="${mapping[level]} font-bold">${text}</h${level}>\n`
    } else {
        return originalHeading(text, level, raw, slugger)
    }
}
marked.setOptions({ renderer })

</script>

<template>
    <Head title="お知らせ詳細" />

    <Header />

    <div class="
        main-wrapper
        h-screen
        bg-black
        ">

        <div class="
            contents-wrapper
            ">

            <div id="news-detail-wrapper" class="
                news-detail-wrapper
                py-10 px-2
                lg:max-w-7xl lg:mx-auto
                lg:px-16
                ">

                <div class="
                    inner
                    border-silver-1
                    pe-0 pb-0
                    ">

                    <div class="
                        p-10
                        bg-black
                        ">

                        <div class="
                            detail-heading-outer
                            mb-6
                            ">
                            <div class="
                                heading
                                ">
                                <h1 class="
                                    text-4xl
                                    font-extrabold
                                    text-silver
                                    ">{{ news.title }}</h1>
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
                                text-silver
                                ">{{  new Date(news.public_date).toLocaleDateString('sv-SE')  }}</div>
                        </div>

                        <div class="content-outer">

                            <div class="
                                content-inner
                                mb-8
                                ">

                                <div v-html="marked.parse(news.body)" class="
                                    text
                                    text-silver
                                    "></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="
                    button-outer
                    flex
                    mt-20
                    justify-center
                    ">
                    <div class="
                        w-60 h-16
                        mx-auto
                        border-silver-1
                        ">
                        <Link :href="route('news.index')" class="
                            button-medium
                            text-center
                            bg-black
                            w-full h-full
                            flex items-center justify-center
                            hover:bg-white transition
                            ">
                            <span class="
                                text-silver
                                font-semibold
                                ">一覧へ戻る</span>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <Footer />

</template>
