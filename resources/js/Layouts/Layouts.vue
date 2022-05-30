<template>
    <section>
        <Navbar />
    </section>

    <section>
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
