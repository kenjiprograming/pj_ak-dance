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
            <h2 class="font-semibold text-xl text-slate-50 leading-tight">お知らせ機能</h2>
            <h2 class="font-semibold text-l text-slate-50 leading-tight">お知らせ一覧</h2>
        </template>

        <div v-if="news" class="max-w-7xl my-10 mx-auto py-10 rounded-2xl bg-slate-300">
            <div v-for="n in news" :key="n.id" class="">
                <div class="py-2">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="flex bg-white py-6 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="mx-8">{{ n.public_date }}</div>
                            <Link :href="route('news.detail')" class="flex-1">{{ n.title }}</Link>
                            <div v-if="n.status === 'public'" class="flex">
                                <div class="bg-slate-400 py-1 px-3 border rounded-xl me-6">公開</div>
                                <div class="bg-slate-50 py-1 px-3 border rounded-xl me-6">非公開</div>
                            </div>
                            <div v-if="n.status === 'private'" class="flex">
                                <div class="bg-slate-50 py-1 px-3 border rounded-xl me-6">公開</div>
                                <div class="bg-slate-400 py-1 px-3 border rounded-xl me-6">非公開</div>
                            </div>
                            <div class="bg-slate-50 py-1 px-3 border rounded-xl me-6">編集</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
