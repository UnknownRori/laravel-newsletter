<template>
    <nav class='bg-sky-400 p-4'>
        <div class='flex flex-row text-white w-[80%] m-auto'>
            <h2 class='text-2xl'>
                Newsletter
            </h2>
            <div class='flex flex-row items-center justify-between w-[100%] mx-4'>
                <ul class='flex flex-row'>
                    <li class='mx-2'>
                        <Link :href='route("home")' :class='{ "font-bold underline": $page.component == "Home" }'>Home
                        </Link>
                    </li>
                    <li class='mx-2'>
                        <Link :href='route("news.index")' :class='{ "font-bold underline": $page.component == "News" }'>
                        News</Link>
                    </li>
                    <li class='mx-2' v-if='$page.props.auth'>
                        <Link :href='route("dashboard")'
                            :class='{ "font-bold underline": $page.component == "Dashboard" }'>
                        Dashboard</Link>
                    </li>
                </ul>

                <ul class='flex flex-row-reverse'>
                    <li class='mx-2' v-if='$page.props.auth'>
                        <Link :href='route("logout")' method='post' as='button'>Logout</Link>
                    </li>
                    <li class='mx-2' v-if='$page.props.auth'>
                        {{ $page.props.auth.name }}
                    </li>
                    <li class='mx-2' v-else>
                        <Link :href='route("login")'>Login</Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
import Route from '../../../vendor/tightenco/ziggy/src/js/Route';
import { Link } from '@inertiajs/inertia-vue3';

</script>