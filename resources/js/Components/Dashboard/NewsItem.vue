<template>
    <tr class='border-2 border-sky-100'>
        <td class='border-2 ring-1 ring-sky-400 p-2 text-center'>
            {{ id }}
        </td>
        <td class='border-2 ring-1 ring-sky-400 p-2'>
            {{ title }}
        </td>
        <td class='border-2 ring-1 ring-sky-400 p-2'>
            {{ body }}
        </td>
        <td class='border-2 ring-1 ring-sky-400 p-2'>
            <div class='w-full'>
                <button @click='menu = !menu' class='bg-sky-400 ring-1 ring-sky-200 rounded p-2 text-white flex m-auto'>
                    Action
                </button>
                <div v-if='menu'
                    class='absolute flex flex-col bg-white rounded ring-1 ring-gray-100 min-w-[100px] shadow-md p-2'>
                    <Link class='text-left p-1' :href='route("news.show", { id: id })'>Show</Link>
                    <Link class='text-left p-1' :href='route("news.edit", { id: id })'>Edit</Link>
                    <Link class='text-left p-1' :href='route("news.destroy", { id: id })' method='delete' as='button'>
                    Delete</Link>
                </div>
            </div>
        </td>
    </tr>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import { defineComponent, ref } from "vue";

export default defineComponent({
    components: { Link },
    props: {
        id: Number,
        title: String,
        body: String,
    },
    setup() {
        let menu = ref(false);
        return { menu };
    }
});
</script>
