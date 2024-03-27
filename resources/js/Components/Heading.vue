<script setup>

const props = defineProps({
    bigText: {
        type: String,
    },
    smallText: {
        type: String,
    },
})

</script>

<template>

    <div class="
        heading-outer
        w-48 h-16
        mb-12 mx-auto
        border-silver-2
        ">
        <div class="
            heading
            bg-white
            w-full h-full
            text-center content-center font-bold
            ">
            <h1 class="
                text-3xl text-silver font-RussoOne
                ">{{ bigText }}
            </h1>
            <p class="
                text
                text-silver font-Lato
                -mt-2
                ">{{ smallText }}
            </p>
        </div>
    </div>

</template>
