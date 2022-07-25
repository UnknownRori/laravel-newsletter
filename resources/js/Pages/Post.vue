<template>

    <Head>
        <title>{{ news.title }}</title>
    </Head>

    <Layouts>
        <header class='text-center my-2'>
            <h3 class='text-3xl'>{{ news.title }}</h3>
        </header>
        <article>
            <p>
                {{ news.body }}
            </p>
            <p class='my-2'>
                Author : {{ author }}
            </p>
        </article>
    </Layouts>
</template>

<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import { defineProps } from "vue";
import Layouts from "../Layouts/Layouts.vue";

const props = defineProps({
    news: Object,
    author: String,
});

</script>