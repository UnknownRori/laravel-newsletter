<template>

    <Head>
        <title>Home</title>
    </Head>

    <Layouts>
        <News :news='$props.news' />
    </Layouts>

</template>

<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import { defineProps } from "vue";
import Layouts from '../Layouts/Layouts';
import News from "../Components/News.vue";

const props = defineProps({
    news: Object
});

</script>