<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="お知らせ詳細" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">お知らせ機能</h2>
            <h2 class="font-semibold text-l text-gray-500 leading-tight">お知らせ詳細</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <Link :href="route('news.detail')" class="">テキストテキスト</Link>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
