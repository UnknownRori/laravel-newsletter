<template>
    <section>
        <Navbar />
    </section>

    <section class='w-[60%] mx-auto'>
        <slot />
    </section>
</template>

<script>
import Navbar from '../Components/Navbar';
import { defineComponent } from 'vue';

export default defineComponent({
    components: { Navbar }
});
</script>
