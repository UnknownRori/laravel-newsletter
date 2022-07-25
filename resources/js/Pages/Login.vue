<template>

    <Head>
        <title>Login</title>
    </Head>

    <Layouts>
        <div class="h-[85vh] w-full flex justify-center">
            <form @submit.prevent="form.post('/auth/auth')" method="post"
                class='bg-white shadow-xl ring-1 ring-sky-200 p-5 flex flex-col w-[60%] self-center m-auto rounded'>
                <h2 class='text-3xl text-sky-500 text-center my-4'>Login</h2>
                <div class="form-control">
                    <label for="name">Name</label>
                    <input v-model='form.name' type="text" name="name" id="name" placeholder='Enter Username' required>
                    <div v-if="form.errors.name" class='bg-red-500 my-2 rounded text-white p-2'>{{ form.errors.name }}
                    </div>
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
                    <button type="submit" :disabled="form.processing">Login</button>
                    <Link href='/auth/signup' class='mx-2 self-center text-sky-500 hover:underline hover:text-sky-700'>
                    Don't have an
                    account?</Link>
                </div>
            </form>
        </div>
    </Layouts>

</template>

<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import Layouts from "../Layouts/Layouts.vue";

const form = useForm({
    name: '',
    password: '',
});
</script>
