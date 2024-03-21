<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';

const page = usePage()

defineProps({
    news: Array,
})
</script>

<template>
    <Head title="お知らせ機能" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <Link :href="route('admin.news.index')"
                    class="text-slate-50 font-semibold text-xl"
                    >お知らせ機能</Link>

                <div class="text-slate-50 font-semibold text-2xl">お知らせ一覧</div>

                <Link :href="route('admin.news.create')"
                    class="bg-slate-50 py-1 px-3 font-semibold rounded-xl hover:bg-slate-500 hover:text-white transition"
                    >新規作成</Link>

            </div>
        </template>

        <div v-if="page.props.flash.message"
            class="max-w-lg mt-8 mx-auto py-4 text-center rounded-2xl text-green-700 bg-green-100"
            role="alert">
            <span class="font-medium">
                {{ page.props.flash.message }}
            </span>
        </div>

        <div v-if="news" class="max-w-7xl my-10 mx-auto py-10 rounded-2xl bg-slate-300">
            <div v-for="n in news" :key="n.id" class="">
                <div class="py-2">
                    <div class="max-w-7xl px-8 mx-auto">
                        <div class="flex bg-white py-6 rounded-lg overflow-hidden shadow-lg hover:bg-slate-100 transition">

                            <div class="mx-8 py-1">{{ new Date(n.public_date).toLocaleDateString('sv-SE') }}</div>

                            <Link :href="route('admin.news.edit', n)"
                                class="flex-1 py-1 underline"
                                >{{ n.title }}</Link>

                            <div v-if="n.status === 'public'" class="flex">
                                <div class="bg-slate-900 text-white py-1 px-3 me-6 rounded-2xl">公開</div>
                            </div>
                            <div v-if="n.status === 'private'" class="flex">
                                <div class="bg-slate-900 text-white py-1 px-3 me-6 rounded-2xl">非公開</div>
                            </div>

                            <Link :href="route('admin.news.edit', n)"
                                class="bg-blue-100 text-blue-900 py-1 px-3 me-6 border hover:bg-blue-900 hover:text-white transition"
                                >編集</Link>

                            <Link :href="route('admin.news.destroy', n)" method="delete"
                                class="bg-red-100 text-red-900 py-1 px-3 me-6 border hover:bg-red-900 hover:text-white transition"
                                >削除</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
