<template>
    <div class='my-4'>
        <Link :href='route("news.show", { slug: slug })' class='text-2xl'>{{ title }}</Link>
        <p>
            {{ body.slice(0, 50) }}
        </p>
        <p>
            Author : {{ user.name }}
        </p>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import { defineComponent } from 'vue';

export default defineComponent({
    components: { Link },
    props: {
        id: Number,
        title: String,
        slug: String,
        body: String,
        user: Object
    },
});
</script>
