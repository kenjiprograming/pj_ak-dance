<script setup>
import { Head, Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
import Button from '../../Components/Button.vue';

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
                ms-2
                ">
                <img src="/images/icon.svg" alt="">
            </Link>
            <Link :href="route('top')" class="
                lg:hidden
                ms-2
                ">
                <img src="/images/icon-sp.svg" alt="">
            </Link>

            <Link :href="route('top')" class="
                max-lg:hidden
                fixed left-1/2 transform -translate-x-1/2
                "><img src="/images/logo.svg" alt="">
            </Link>

            <div class="
                max-lg:hidden
                ">

                <div v-if="!isTopRoute" class="
                    h-full
                    content-center
                    ">
                    <Link :href="route('top')" class="
                        gnavi-item link
                        text-silver font-semibold
                        mx-4
                        ">トップ</Link>
                    <Link :href="route('news.index')" class="
                        gnavi-item link
                        text-silver font-semibold
                        mx-4
                        ">お知らせ一覧</Link>
                </div>

                <div v-if="isTopRoute" class="
                    h-full
                    content-center
                    ">
                    <a href="#news-wrapper" class="
                        gnavi-item link
                        text-silver font-semibold
                        mx-4
                        ">お知らせ</a>
                    <a href="#career-wrapper" class="
                        gnavi-item link
                        text-silver font-semibold
                        mx-2
                        ">講師</a>
                    <a href="#concept-wrapper" class="
                        gnavi-item link
                        text-silver font-semibold
                        mx-2
                        ">コンセプト</a>
                    <a href="#schedule-wrapper" class="
                        gnavi-item link
                        text-silver font-semibold
                        mx-2
                        underline
                        ">レッスン</a>
                    <a href="#access-wrapper" class="
                        gnavi-item link
                        text-silver font-semibold
                        mx-2
                        ">アクセス</a>
                    <a href="#contact-wrapper" class="
                        gnavi-item link
                        text-silver font-semibold
                        mx-2
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
                <Button
                    :isLink="true"
                    :href="route('top')"
                    :title="`トップ`"/>
                <Button
                    :isLink="true"
                    :href="route('news.index')"
                    :title="`お知らせ一覧`"/>
            </div>
            <div v-if="isTopRoute" class="
                flex justify-center
                my-4
                ">
                <Button
                    :isLink="false"
                    :href="`#news-wrapper`"
                    :title="`お知らせ`"/>
                <Button
                    :isLink="false"
                    :href="`#career-wrapper`"
                    :title="`講師`"/>
            </div>
            <div v-if="isTopRoute" class="
                flex justify-center
                my-4
                ">
                <Button
                    :isLink="false"
                    :href="`#concept-wrapper`"
                    :title="`コンセプト`"/>
                <Button
                    :isLink="false"
                    :href="`#schedule-wrapper`"
                    :title="`レッスン`"/>
            </div>
            <div v-if="isTopRoute" class="
                flex justify-center
                my-4
                ">
                <Button
                    :isLink="false"
                    :href="`#access-wrapper`"
                    :title="`アクセス`"/>
                <Button
                    :isLink="false"
                    :href="`#contact-wrapper`"
                    :title="`お問い合わせ`"/>
            </div>
        </div>
    </header>
</template>
