<template>
    <div>
        <Link class='mx-2 text-sky-500 hover:text-sky-700 hover:underline' v-if='$props.prev_page_url'
            :href='prev_page_url'>Previous
        </Link>
        <Link class='mx-2 text-sky-500 hover:text-sky-700 hover:underline' v-if='$props.next_page_url'
            :href='next_page_url'>Next</Link>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import { defineComponent } from "vue";

export default defineComponent({
    components: { Link },
    props: {
        next_page_url: String,
        prev_page_url: String
    }
});
</script>
