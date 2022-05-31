<template>

    <Head>
        <title>Home</title>
    </Head>

    <Layouts>
        <div class='w-[60%] mx-auto'>
            <article v-for='news in $props.news.data'>
                <Post :key='news.id' :id='news.id' :title='news.title' :slug='news.slug' :body='news.body'
                    :user='news.user' />
            </article>
            <div class='m-auto text-center'>
                <PaginateButton :next_page_url='$props.news.next_page_url' :prev_page_url='$props.news.prev_page_url' />
            </div>
        </div>
    </Layouts>

</template>


<script>
import { Head } from "@inertiajs/inertia-vue3";
import { defineComponent } from "vue";
import Layouts from '../Layouts/Layouts';
import PaginateButton from '../Components/PaginateButton';
import Post from "../Components/Post.vue";


export default defineComponent({
    components: { Layouts, Post, PaginateButton, Head },
    props: {
        news: Object
    }
})
</script>
