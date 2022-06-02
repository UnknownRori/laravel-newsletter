<template>

    <Head>
        <title>{{ $props.title ? $props.title : 'New Article' }}</title>
    </Head>

    <Layouts>
        <section>
            <form
                @submit.prevent='$props.id ? form.patch(route("news.update", { id: $props.id })) : form.post(route("news.store"))'
                class='bg-white shadow-xl ring-1 ring-sky-200 p-5 flex flex-col w-[60%] self-center m-auto rounded'>
                <h2 class='text-3xl text-sky-500 text-center my-4'>{{ $props.title ? $props.title : 'New Article' }}
                </h2>
                <div class="form-control">
                    <label for="title">Title</label>
                    <input v-model='form.title' type="text" name="title" id="title" placeholder='Enter Title' required>
                    <div v-if="form.errors.title" class='bg-red-500 my-2 rounded text-white p-2'>{{ form.errors.title }}
                    </div>
                </div>
                <div class="form-control">
                    <label for="body">Content</label>
                    <textarea name="body" v-model='form.body' id="body" cols="30" rows="10"></textarea>
                    <div v-if="form.errors.body" class='bg-red-500 my-2 rounded text-white p-2'>{{
                            form.errors.body
                    }}</div>
                </div>
                <div class="form-control" v-if='$page.props.flash.error'>
                    <span class='bg-red-500 text-white rounded p-2'>
                        {{ $page.props.flash.error }}
                    </span>
                </div>
                <div class="form-control flex-row">
                    <button type="submit" :disabled="form.processing">{{ $props.id ? "Edit" : "Create" }}</button>
                </div>
            </form>
        </section>
    </Layouts>

</template>

<script>
import { Head, useForm } from '@inertiajs/inertia-vue3';
import { defineComponent } from 'vue';
import Layouts from '../Layouts/Layouts.vue'

export default defineComponent({
    components: { Head, Layouts },
    props: {
        id: Number,
        title: String,
        body: String,
    },
    setup(props) {
        const form = useForm({
            id: props.id ? props.id : null,
            title: props.title ? props.title : '',
            body: props.body ? props.body : '',
        })

        return { form };
    }
});
</script>
