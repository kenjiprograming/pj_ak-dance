<script setup>

const toggleHamburger = () => {
    const bars =document.getElementById('bars');
    const xmark =document.getElementById('xmark');
    const menu = document.getElementById('menu');

    bars.classList.toggle('hidden')
    xmark.classList.toggle('hidden')
    menu.classList.toggle('hidden')
}
</script>

<template>
    <header class="
        max-sm:sticky
        max-sm:top-0
        ">
        <div class="
            bg-black
            h-auto
            flex
            justify-between
            ">
            <a href="./index.html" class="
                max-sm:hidden
                ">
                <img src="/images/icon.svg" alt="">
            </a>
            <a href="./index.html" class="
                sm:hidden
                ">
                <img src="/images/icon-sp.svg" alt="">
            </a>

            <a href="./index.html" class="max-sm:hidden">
                <img src="/images/logo.svg" alt="">
            </a>
            <a href="./index.html" class="sm:hidden">
                <img src="/images/logo-sp.svg" alt="">
            </a>

            <div class="max-sm:hidden">
                <a href="./index.html#news-wrapper" class="gnavi-item link">お知らせ</a>
                <a href="./index.html#career-wrapper" class="gnavi-item link">講師</a>
                <a href="./index.html#concept-wrapper" class="gnavi-item link">コンセプト</a>
                <a href="./index.html#schedule-wrapper" class="gnavi-item link">レッスン</a>
                <a href="./index.html#access-wrapper" class="gnavi-item link">アクセス</a>
                <a href="./index.html#contact-wrapper" class="gnavi-item link">お問い合わせ</a>
            </div>

            <div id="hamburger" @click="toggleHamburger()" class="
                sm:hidden
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
            <div class="flex justify-center my-4">
                <a class="w-40 py-4 mx-8 text-white text-center border" href="./index.html#news-wrapper">お知らせ</a>
                <a class="w-40 py-4 mx-8 text-white text-center border" href="./index.html#career-wrapper">講師</a>
            </div>
            <div class="flex justify-center my-4">
                <a class="w-40 py-4 mx-8 text-white text-center border" href="./index.html#concept-wrapper">コンセプト</a>
                <a class="w-40 py-4 mx-8 text-white text-center border" href="./index.html#schedule-wrapper">レッスン</a>
            </div>
            <div class="flex justify-center my-4">
                <a class="w-40 py-4 mx-8 text-white text-center border" href="./index.html#access-wrapper">アクセス</a>
                <a class="w-40 py-4 mx-8 text-white text-center border" href="./index.html#contact-wrapper">お問い合わせ</a>
            </div>
        </div>
    </header>
</template>
