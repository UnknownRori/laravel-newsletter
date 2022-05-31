<template>
    <nav class='bg-sky-400 p-4'>
        <div class='flex flex-row text-white w-[80%] m-auto'>
            <h2 class='text-2xl'>
                Newsletter
            </h2>
            <div class='flex flex-row items-center justify-between w-[100%] mx-4'>
                <ul class='flex flex-row'>
                    <li class='mx-2'>
                        <Link href='/' :class='{ "font-bold underline": $page.component == "Home" }'>Home</Link>
                    </li>
                    <li class='mx-2'>
                        <Link href='/news'>News</Link>
                    </li>
                    <li class='mx-2'>
                        <Link href='/dashboard'>Dashboard</Link>
                    </li>
                </ul>

                <ul class='flex flex-row-reverse'>
                    <li class='mx-2' v-if='$page.props.auth'>
                        <Link href='/auth/logout' method='post'>Logout</Link>
                    </li>
                    <li class='mx-2' v-if='$page.props.auth'>
                        {{ $page.props.auth.name }}
                    </li>
                    <li class='mx-2' v-else>
                        <Link href='/auth/login'>Login</Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import { defineComponent } from 'vue';

export default defineComponent({
    components: { Link }
});
</script>
