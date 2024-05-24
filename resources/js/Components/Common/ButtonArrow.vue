<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
});

</script>

<template>
    <Link :href="href" class="'inline-block relative drop-shadow-lg bg-purple-500 border-purple-300 py-[8px] px-[20px] rounded-lg text-2xl text-center font-bold uppercase before:content-[' '] before:absolute before:z-0 before:bg-purple-500 before:border-purple-300 before:w-[38px] before:h-[38px] before:transform before:rotate-45 before:top-[5px] before:-right-[13px] before:origin-[50%] before:rounded-lg'">
        <slot />
        <span class="pr-10 -mr-6 ">Volver</span>
    </Link>
</template>

