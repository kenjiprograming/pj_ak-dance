<script setup>
import { Head, Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const toggleHamburger = () => {
    const bars =document.getElementById('bars');
    const xmark =document.getElementById('xmark');
    const menu = document.getElementById('menu');

    bars.classList.toggle('hidden')
    xmark.classList.toggle('hidden')
    menu.classList.toggle('hidden')
}

const page = usePage()
const isTopRoute = computed(() => {
    return page.url === '/'
})
</script>

<template>
    <header class="
        sticky
        top-0
        ">

        <div class="
            bg-black
            h-auto
            flex
            justify-between
            ">

            <Link :href="route('top')" class="
                max-lg:hidden
                ">
                <img src="/images/icon.svg" alt="">
            </Link>
            <Link :href="route('top')" class="
                lg:hidden
                ">
                <img src="/images/icon-sp.svg" alt="">
            </Link>

            <Link :href="route('top')" class="
                max-lg:hidden
                fixed left-1/2 transform -translate-x-1/2
                "><img src="/images/logo.svg" alt="">
            </Link>
            <Link :href="route('top')" class="
                lg:hidden
                fixed left-1/2 transform -translate-x-1/2
                "><img src="/images/logo-sp.svg" alt="">
            </Link>

            <div class="
                max-lg:hidden
                ">

                <div v-if="!isTopRoute" class="
                    text-slate-500
                    h-full
                    content-center
                    ">
                    <Link :href="route('top')" class="
                        gnavi-item link
                        mx-4
                        underline
                        ">トップ</Link>
                    <Link :href="route('news.index')" class="
                        gnavi-item link
                        mx-4
                        underline
                        ">お知らせ一覧</Link>
                </div>

                <div v-if="isTopRoute" class="
                    text-slate-500
                    h-full
                    content-center
                    ">
                    <a href="#news-wrapper" class="
                        gnavi-item link
                        mx-4
                        underline
                        ">お知らせ</a>
                    <a href="#career-wrapper" class="
                        gnavi-item link
                        mx-2
                        underline
                        ">講師</a>
                    <a href="#concept-wrapper" class="
                        gnavi-item link
                        mx-2
                        underline
                        ">コンセプト</a>
                    <a href="#schedule-wrapper" class="
                        gnavi-item link
                        mx-2
                        underline
                        ">レッスン</a>
                    <a href="#access-wrapper" class="
                        gnavi-item link
                        mx-2
                        underline
                        ">アクセス</a>
                    <a href="#contact-wrapper" class="
                        gnavi-item link
                        mx-2
                        underline
                        ">お問い合わせ</a>
                </div>
            </div>

            <div id="hamburger" @click="toggleHamburger()" class="
                lg:hidden
                me-2
                w-7
                ">

                <img id="bars" src="/images/hamburger-close.svg" alt="" class="
                    h-full
                    ">
                <img id="xmark" src="/images/hamburger-open.svg" alt="" class="
                    hidden
                    h-full
                    ">
            </div>

        </div>
        <div id="menu" class="
            lg:hidden bg-black
            hidden
            flex flex-col
            py-4
            h-auto
            ">
            <div v-if="!isTopRoute" class="
                flex justify-center
                my-4
                ">
                <Link :href="route('top')" class="
                    w-40 py-4 mx-8
                    text-white text-center border
                    ">トップ</Link>
                <Link :href="route('news.index')" class="
                    w-40 py-4 mx-8
                    text-white text-center border
                    ">お知らせ一覧</Link>
            </div>
            <div v-if="isTopRoute" class="
                flex justify-center
                my-4
                ">
                <a class="
                    w-40 py-4 mx-8
                    text-white text-center border
                    " href="#news-wrapper">お知らせ</a>
                <a class="
                    w-40 py-4 mx-8
                    text-white text-center border
                    " href="#career-wrapper">講師</a>
            </div>
            <div v-if="isTopRoute" class="
                flex justify-center
                my-4
                ">
                <a class="
                    w-40 py-4 mx-8
                    text-white text-center border
                    " href="#concept-wrapper">コンセプト</a>
                <a class="
                    w-40 py-4 mx-8
                    text-white text-center border
                    " href="#schedule-wrapper">レッスン</a>
            </div>
            <div v-if="isTopRoute" class="
                flex justify-center
                my-4
                ">
                <a class="
                    w-40 py-4 mx-8
                    text-white text-center border
                    " href="#access-wrapper">アクセス</a>
                <a class="
                    w-40 py-4 mx-8
                    text-white text-center border
                    " href="#contact-wrapper">お問い合わせ</a>
            </div>
        </div>
    </header>
</template>
