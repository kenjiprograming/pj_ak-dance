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
        text-slate-500
        ">

        <div class="contents-wrapper">

            <div id="news-detail-wrapper" class="
                news-detail-wrapper
                py-10 px-2
                lg:max-w-7xl lg:mx-auto
                lg:px-16 lg:pt-16 lg:mb-28
                ">

                <div class="
                    inner
                    border-t border-s border-slate-500
                    p-2
                    lg:p-10
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
                            ">{{  new Date(news.public_date).toLocaleDateString('sv-SE')  }}</div>
                    </div>

                    <div class="content-outer">

                        <div class="
                            content-inner
                            mb-8
                            ">

                            <div v-html="marked.parse(news.body)" class="
                                text
                                "></div>
                        </div>

                    </div>

                </div>

                <div class="
                    button-outer
                    flex
                    mt-20
                    justify-center
                    ">
                    <Link :href="route('news.index')" class="
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
