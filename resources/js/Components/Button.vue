<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    isLink: {
        type: Boolean,
    },
    href: {
        type: String,
    },
    title: {
        type: String,
    },
})

</script>

<template>

    <div class="
        w-40 h-12 mx-8
        border-silver-1
        ">
        <Link v-if="isLink" :href="href" class="
            text-center
            bg-black
            w-full h-full
            flex items-center justify-center
            ">
            <span class="
                text-silver
                font-semibold
                ">{{ title }}
            </span>
        </Link>
        <a v-if="!isLink" :href="href" class="
            text-center
            bg-black
            w-full h-full
            flex items-center justify-center
            ">
            <span class="
                text-silver
                font-semibold
                ">{{ title }}
            </span>
        </a>
    </div>

</template>
