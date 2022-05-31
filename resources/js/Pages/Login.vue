<template>

    <Head>
        <title>Login</title>
    </Head>

    <Layouts>
        <div class="h-[85vh] w-full flex justify-center">
            <form action="/auth/auth" method="post"
                class='bg-white shadow-xl ring-1 ring-sky-200 p-5 flex flex-col w-[40%] self-center m-auto rounded'>
                <h2 class='text-3xl text-sky-500 text-center my-4'>Login</h2>
                <div class="form-control">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder='Enter Username'>
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder='Enter Password'>
                </div>
                <div class="form-control">
                    <Link href='/auth/auth' method='post'>Login</Link>
                </div>
            </form>
        </div>
    </Layouts>

</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Layouts from "../Layouts/Layouts.vue";
import { defineComponent } from "vue";

export default defineComponent({
    components: { Head, Link, Layouts },
});
</script>
