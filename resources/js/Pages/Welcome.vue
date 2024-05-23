<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <div class="w-full">
        <div class="flex justify-center py-64 pr-2 pl-2 gap-16">
            <div class="w-1/3 h-64 text-white bg-cyan-900 hover:opacity-70 hover:bg-sky-600 flex justify-center">
                <button class="text-3xl hover:text-4xl"><b>MENU<div class="text-6xl hover:text-8xl">📒</div></b></button>
            </div>
            <div class="w-1/3 h-64 text-white bg-cyan-900 hover:opacity-70 hover:bg-sky-600 flex justify-center">
                <button class="hover:text-4xl text-3xl"><b>PLATOS<div class="text-6xl hover:text-8xl">🍽️</div></b></button>
            </div>
        </div>
    </div>

</template>
