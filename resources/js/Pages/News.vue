<template>

    <Head>
        <title>News</title>
    </Head>

    <Layouts>
        <News :news='$props.news' />
    </Layouts>

</template>


<script>
import { Head } from "@inertiajs/inertia-vue3";
import { defineComponent } from "vue";
import Layouts from '../Layouts/Layouts';
import News from "../Components/News.vue";

export default defineComponent({
    components: { Layouts, Head, News },
    props: {
        news: Object
    }
})
</script>
