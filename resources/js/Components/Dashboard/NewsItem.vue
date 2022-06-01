<template>
    <tr class='border-2 border-sky-100'>
        <td class='border-2 ring-1 ring-sky-400 p-2 text-center'>
            {{ id }}
        </td>
        <td class='border-2 ring-1 ring-sky-400 p-2'>
            {{ title }}
        </td>
        <td class='border-2 ring-1 ring-sky-400 p-2'>
            {{ body.slice(0, 50) }}
        </td>
        <td class='border-2 ring-1 ring-sky-400 p-2'>
            Action
        </td>
    </tr>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
    props: {
        id: Number,
        title: String,
        body: String,
    }
});
</script>
