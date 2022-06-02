<template>
    <tr class='border-2 border-sky-100'>
        <td class='border-2 ring-1 ring-sky-400 p-2 text-center'>
            {{ id }}
        </td>
        <td class='border-2 ring-1 ring-sky-400 p-2'>
            {{ title }}
        </td>
        <td class='border-2 ring-1 ring-sky-400 p-2'>
            {{ body }}
        </td>
        <td class='border-2 ring-1 ring-sky-400 p-2'>
            <div class='w-full'>
                <button class='bg-sky-400 ring-1 ring-sky-200 rounded p-2 text-white flex m-auto'>
                    Action
                </button>
                <div class='fixed bg-white rounded ring-1 ring-gray-100 min-w-[100px] shadow-md p-2'>
                    <!--  -->
                </div>
            </div>
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
