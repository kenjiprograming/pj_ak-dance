<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    news: Array,
})
</script>

<template>
    <Head title="お知らせ機能" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">お知らせ機能</h2>
            <h2 class="font-semibold text-l text-gray-500 leading-tight">お知らせ一覧</h2>
        </template>

        <div v-for="n in news" :key="n.id">
            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div>{{ n.public_date }}</div>
                        <Link :href="route('news.detail')" class="">{{ n.title }}</Link>
                        <div v-if="n.status === 'public'">公開</div>
                        <div v-if="n.status === 'private'">非公開</div>
                        <div>編集</div>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
