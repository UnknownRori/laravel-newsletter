<template>
    <article v-for='news in $props.news.data'>
        <Post :key='news.id' :id='news.id' :title='news.title' :slug='news.slug' :body='news.body' :user='news.user' />
    </article>
    <div class='m-auto text-center'>
        <PaginateButton :next_page_url='$props.news.next_page_url' :prev_page_url='$props.news.prev_page_url' />
    </div>
</template>

<script setup>
import { defineProps } from 'vue';
import Post from "./Post.vue";
import PaginateButton from "../Shared/PaginateButton.vue";

const props = defineProps({
    news: Object
});

</script>