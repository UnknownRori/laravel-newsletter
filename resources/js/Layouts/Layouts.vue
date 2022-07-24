<template>
    <section>
        <Navbar />
    </section>

    <section class='w-[60%] mx-auto'>
        <slot />
    </section>
</template>

<script setup>
import Navbar from '../Shared/Navbar';

</script>