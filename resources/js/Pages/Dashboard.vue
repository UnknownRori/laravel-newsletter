<template>

    <Head>
        <title>Dashboard</title>
    </Head>
    <Layouts>
        <section class='mt-5'>
            <table class='w-full shadow-md text-white'>
                <thead class='bg-sky-700 border-sky-300 rounded'>
                    <tr class='border-2 border-sky-300'>
                        <td class='border-2 border-sky-300 p-2 text-center'>ID</td>
                        <td class='border-2 border-sky-300 p-2 text-center'>Title</td>
                        <td class='border-2 border-sky-300 p-2 text-center'>Body</td>
                        <td class='border-2 border-sky-300 p-2 text-center'>Action</td>
                    </tr>
                </thead>
                <tbody class='bg-sky-500 rounded' v-for='post in news'>
                    <NewsItem :id='post.id' :body='post.body' :title='post.title' />
                </tbody>
            </table>
        </section>
    </Layouts>

</template>

<script>
import { defineComponent } from 'vue';
import { Head } from '@inertiajs/inertia-vue3';
import Layouts from '../Layouts/Layouts.vue';
import NewsItem from '../Components/Dashboard/NewsItem.vue';

export default defineComponent({
    components: { Head, Layouts, NewsItem },
    props: {
        news: Object
    },
});

</script>
