<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
    news: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({
    status: props.news.status,
    title: props.news.title,
    body: props.news.slug,
    public_date: new Date(props.news.public_date),
});

const masks = ref({ modelValue: 'YYYY-MM-DD' });

const submit = () => {
    form.post(route("news.store"));
};
</script>

<template>
    <Head title="お知らせ詳細" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <Link :href="route('news.index')" class="text-slate-50 font-semibold text-xl">お知らせ機能</Link>
                <div class="text-slate-50 font-semibold text-2xl">お知らせ詳細</div>
                <Link :href="route('news.create')"
                    class="bg-slate-50 py-1 px-3 font-semibold rounded-xl hover:bg-slate-500 hover:text-white transition"
                    >新規作成</Link>
            </div>
        </template>

        <div class="max-w-7xl my-10 mx-auto py-10 rounded-2xl bg-slate-300">

            <form @submit.prevent="submit">

                <div class="py-2">
                    <div class="max-w-7xl px-8 mx-auto">
                        <div class="flex bg-white py-6 rounded-lg overflow-hidden shadow-lg hover:bg-slate-100 transition">

                            <div class="px-10 py-1 font-semibold">ステータス：</div>

                            <div class="flex flex-col">

                                <div v-if="form.errors.status" class="text-sm text-red-600">
                                    {{ form.errors.status }}
                                </div>

                                <div class="flex justify-between">
                                    <label for="public-button"
                                        :class="form.status === 'public'
                                            ? 'bg-slate-900 text-white py-1 px-3 me-6 border rounded-2xl transition'
                                            : 'bg-slate-0 py-1 px-3 me-6 border rounded-2xl transition hover:bg-slate-900 hover:text-white'"
                                        >公開
                                        <input id="public-button" type="radio" value="public" v-model="form.status"
                                            class="hidden"
                                            /></label>

                                    <label for="private-button"
                                        :class="form.status === 'private'
                                            ? 'bg-slate-900 text-white py-1 px-3 me-6 border rounded-2xl transition'
                                            : 'bg-slate-0 py-1 px-3 me-6 border rounded-2xl transition hover:bg-slate-900 hover:text-white'"
                                        >非公開
                                        <input id="private-button" type="radio" value="private" v-model="form.status"
                                            class="hidden"
                                            /></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-2">
                    <div class="max-w-7xl px-8 mx-auto">
                        <div class="flex bg-white py-6 rounded-lg overflow-hidden shadow-lg hover:bg-slate-100 transition">
                            <div class="px-10 py-2 font-semibold">公開日時：</div>
                            <div class="flex flex-col">
                                <div v-if="form.errors.public_date" class="text-sm text-red-600">
                                    {{ form.errors.public_date }}
                                </div>
                                <div>
                                    <VDatePicker v-model.string="form.public_date" mode="date" :masks="masks"/>
                                </div>
                                <input type="hidden" class="me-4" placeholder="2002-01-21" v-model="form.public_date" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-2">
                    <div class="max-w-7xl px-8 mx-auto">
                        <div class="flex bg-white py-6 rounded-lg overflow-hidden shadow-lg hover:bg-slate-100 transition">
                            <div class="px-10 py-2 font-semibold">タイトル：</div>
                            <div class="flex flex-col">
                                <div v-if="form.errors.title" class="text-sm text-red-600">
                                    {{ form.errors.title }}
                                </div>
                                <input type="text" class="w-96" placeholder="タイトル" v-model="form.title"></input>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-2">
                    <div class="max-w-7xl px-8 mx-auto">
                        <div class="flex bg-white py-6 rounded-lg h-96 overflow-hidden shadow-lg hover:bg-slate-100 transition">
                            <div class="px-10 py-2 font-semibold">本文：</div>
                            <div class="flex flex-col">
                                <div v-if="form.errors.body" class="text-sm text-red-600">
                                    {{ form.errors.body }}
                                </div>
                                <textarea class="h-full w-96" placeholder="## 小見出し１" v-model="form.body"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-2">
                    <div class="max-w-7xl px-8 mx-auto">
                        <div class="flex justify-center bg-white py-6 rounded-lg overflow-hidden shadow-lg hover:bg-slate-100 transition">
                            <button class="
                                bg-blue-100 text-blue-900 py-3 px-5 me-6 border font-semibold hover:bg-blue-900 hover:text-white transition
                                ">登録・更新</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </AuthenticatedLayout>
</template>
