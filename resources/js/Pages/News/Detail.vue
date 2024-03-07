<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { computed, ref } from 'vue';
import axios from 'axios';

const props = defineProps({
    news: Object,
});

const [rawYear, rawMonth, rawDay] = props.news.public_date.split(" ")[0].split("-");

const status = ref(props.news ? props.news.status : '');
const year = ref(rawYear);
const month = ref(rawMonth);
const day = ref(rawDay);
const title = ref(props.news ? props.news.title : '');
const body = ref(props.news ? props.news.body : '');

const public_date = computed(() => {
    return year.value + '-' + month.value + '-' + day.value;
})

const data = computed(() => {
    return {
        status: status.value,
        public_date: public_date.value,
        title: title.value,
        body: body.value
    };
});

const handleSubmit = () => {
    axios.post('/api/news', data.value)
        .then((response) => {
            console.log(response);
        })
        .catch((err) => {
            console.log(err);
        });
}
</script>

<template>
    <Head title="お知らせ詳細" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <Link :href="route('news')" class="text-slate-50 font-semibold text-xl">お知らせ機能</Link>
                <div class="text-slate-50 font-semibold text-2xl">お知らせ詳細</div>
                <a href="#" class="bg-slate-50 py-1 px-3 font-semibold rounded-xl hover:bg-slate-500 hover:text-white transition">新規作成</a>
            </div>
        </template>

        <div class="max-w-7xl my-10 mx-auto py-10 rounded-2xl bg-slate-300">
            <div class="py-2">
                <div class="max-w-7xl px-8 mx-auto">
                    <div class="flex bg-white py-6 rounded-lg overflow-hidden shadow-lg hover:bg-slate-100 transition">
                        <div class="px-10 py-1 font-semibold">ステータス：</div>
                        <div class="flex justify-between">

                            <input id="public-button" type="radio" value="public" v-model="status" class="" />
                            <label for="public-button">公開</label>

                            <input id="private-button" type="radio" value="private" v-model="status" class="" />
                            <label for="private-button">非公開</label>

                            <a href="#" class="bg-slate-50 py-1 px-3 me-6 border rounded-2xl hover:bg-slate-900 hover:text-white transition">公開</a>
                            <a href="#" class="bg-slate-500 text-white py-1 px-3 me-6 border rounded-2xl hover:bg-slate-900 transition">非公開</a>
                            <a href="#" class="bg-red-100 text-red-900 py-1 px-3 me-6 border hover:bg-red-900 hover:text-white transition">削除</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2">
                <div class="max-w-7xl px-8 mx-auto">
                    <div class="flex bg-white py-6 rounded-lg overflow-hidden shadow-lg hover:bg-slate-100 transition">
                        <div class="px-10 py-2 font-semibold">公開日時：</div>
                        <div class="flex justify-between">
                            <input type="text" class="me-4" placeholder="2024" v-model="year"></input>
                            <input type="text" class="me-4" placeholder="01" v-model="month"></input>
                            <input type="text" class="me-4" placeholder="21" v-model="day"></input>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2">
                <div class="max-w-7xl px-8 mx-auto">
                    <div class="flex bg-white py-6 rounded-lg overflow-hidden shadow-lg hover:bg-slate-100 transition">
                        <div class="px-10 py-2 font-semibold">タイトル：</div>
                        <input type="text" class="w-96" placeholder="タイトル" v-model="title"></input>
                    </div>
                </div>
            </div>
            <div class="py-2">
                <div class="max-w-7xl px-8 mx-auto">
                    <div class="flex bg-white py-6 rounded-lg h-96 overflow-hidden shadow-lg hover:bg-slate-100 transition">
                        <div class="px-10 py-2 font-semibold">内容：</div>
                        <textarea class="h-full w-96" placeholder="## 小見出し１" v-model="body"></textarea>
                    </div>
                </div>
            </div>
            <div class="py-2">
                <div class="max-w-7xl px-8 mx-auto">
                    <div class="flex justify-center bg-white py-6 rounded-lg overflow-hidden shadow-lg hover:bg-slate-100 transition">
                        <button @click="handleSubmit()" class="bg-blue-100 text-blue-900 py-3 px-5 me-6 border font-semibold hover:bg-blue-900 hover:text-white transition">登録・更新</button>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
