<template>

    <Head>
        <title>News</title>
    </Head>

    <Layouts>
        <News :news='$props.news' />
    </Layouts>

</template>

<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import { defineProps } from "vue";
import Layouts from '../Layouts/Layouts.vue';
import News from "../Components/News.vue";

const props = defineProps({
    news: Object
});

</script>