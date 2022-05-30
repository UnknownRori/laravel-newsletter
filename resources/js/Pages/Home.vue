<template>
    <Layouts>
        <article class='w-[60%] mx-auto' v-for='news in $props.news'>
            <Post :key='news.id' :id='news.id' :title='news.title' :slug='news.slug' :body='news.body'
                :user='news.user' />
        </article>
    </Layouts>
</template>


<script>
import { defineComponent } from "vue";
import Layouts from '../Layouts/Layouts';
import Post from "../Components/Post.vue";


export default defineComponent({
    components: { Layouts, Post },
    props: {
        news: Array
    }
})
</script>
