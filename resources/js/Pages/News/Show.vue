<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { marked } from 'marked';

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
    <Head title="お知らせプレビュー" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between pb-2 border-b-2">
                <Link :href="route('admin.news.index')" class="
                    text-slate-50 font-semibold text-xl
                    ">お知らせ機能</Link>
                <div class="
                    text-slate-50 font-semibold text-2xl
                    ">お知らせ詳細プレビュー</div>
                <div>
                    <Link :href="route('admin.news.edit', news)" class="
                        bg-blue-100 text-blue-900
                        py-1 px-3 me-6 border
                        font-semibold rounded-xl
                        hover:bg-blue-900 hover:text-white transition
                        ">編集</Link>
                    <Link :href="route('admin.news.destroy', news)" class="
                        bg-red-100 text-red-900
                        py-1 px-3 me-6 border
                        font-semibold rounded-xl
                        hover:bg-red-900 hover:text-white transition
                        ">削除</Link>
                    <Link :href="route('admin.news.index')" class="
                        bg-slate-50
                        py-1 px-3 me-6
                        font-semibold rounded-xl
                        hover:bg-slate-500 hover:text-white transition
                        ">一覧</Link>
                </div>
            </div>
        </template>

        <div class="
            main-wrapper
            bg-black
            text-slate-500
            ">

            <div class="
                contents-wrapper
                lg:pt-16
                ">

                <div class="
                    font-bold text-xl
                    text-white
                    w-60
                    mx-auto
                    border-b-2
                    ">SPでの表示</div>

                <div id="news-detail-wrapper" class="
                    news-detail-wrapper
                    py-10 px-2
                    mx-auto
                    w-96
                    ">

                    <div class="inner
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
                                        text-slate-300
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
                                    ">{{ new Date(news.public_date).toLocaleDateString('sv-SE')  }}</div>
                            </div>

                            <div class="content-outer">

                                <div class="
                                    content-inner
                                    mb-8
                                    ">

                                    <div v-html="marked.parse(news.body)" class="
                                        text
                                        text-slate-300
                                        "></div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
                <div class="
                    font-bold text-xl
                    text-white
                    w-60
                    mx-auto
                    border-b-2
                    ">PCでの表示</div>

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
                                        text-slate-300
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
                                    ">{{ new Date(news.public_date).toLocaleDateString('sv-SE')  }}</div>
                            </div>

                            <div class="content-outer">

                                <div class="
                                    content-inner
                                    mb-8
                                    ">

                                    <div v-html="marked.parse(news.body)" class="
                                        text
                                        text-slate-300
                                        "></div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>

    </AuthenticatedLayout>
</template>
