<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="機能一覧" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <div class="
                    text-slate-50 font-semibold text-xl
                    ">機能一覧</div>
                <a :href="route('top')" target="_blank" class="
                    text-black font-semibold leading-7
                    bg-white
                    rounded
                    px-2
                    hover:bg-slate-100 transition
                    ">公開サイトを見る</a>
            </div>
        </template>

        <div class="max-w-7xl my-10 mx-auto py-10 rounded-2xl bg-slate-300">
            <div class="py-2">
                <div class="max-w-xl px-8 mx-auto">
                    <div class="bg-white py-6 rounded-lg overflow-hidden shadow-lg transition hover:bg-slate-100">
                        <Link :href="route('admin.news.index')" class="block font-semibold text-center">お知らせ機能</Link>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
