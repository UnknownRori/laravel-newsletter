<template>

    <Head>
        <title>Sign up</title>
    </Head>

    <Layouts>
        <div class="h-[85vh] w-full flex justify-center">
            <form @submit.prevent="form.post('/auth/signup')" method="post"
                class='bg-white shadow-xl ring-1 ring-sky-200 p-5 flex flex-col w-[60%] self-center m-auto rounded'>
                <h2 class='text-3xl text-sky-500 text-center my-4'>Register</h2>
                <div class="form-control">
                    <label for="name">Name</label>
                    <input v-model='form.name' type="text" name="name" id="name" placeholder='Enter Username' required>
                    <div v-if="form.errors.name" class='bg-red-500 my-2 rounded text-white p-2'>{{ form.errors.name }}
                    </div>
                </div>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input v-model='form.email' type="email" name="email" id="email" placeholder='Enter Email' required>
                    <div v-if="form.errors.email" class='bg-red-500 my-2 rounded text-white p-2'>{{
                            form.errors.email
                    }}</div>
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input v-model='form.password' type="password" name="password" id="password"
                        placeholder='Enter Password' required>
                    <div v-if="form.errors.password" class='bg-red-500 my-2 rounded text-white p-2'>{{
                            form.errors.password
                    }}</div>
                </div>
                <div class="form-control" v-if='$page.props.flash.error'>
                    <span class='bg-red-500 text-white rounded p-2'>
                        {{ $page.props.flash.error }}
                    </span>
                </div>
                <div class="form-control flex-row">
                    <button type="submit" :disabled="form.processing">Sign up</button>
                    <Link href='/auth/login' class='mx-2 self-center text-sky-500 hover:underline hover:text-sky-700'>
                    Already have an account?</Link>
                </div>
            </form>
        </div>
    </Layouts>
</template>

<script>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import { defineComponent } from 'vue';
import Layouts from '../Layouts/Layouts';

export default defineComponent({
    components: { Head, Link, Layouts },
    setup() {
        const form = useForm({
            name: '',
            password: '',
            email: '',
        });

        return {
            form
        };
    }
});

</script>
