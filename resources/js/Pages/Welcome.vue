<script setup>
import { Link, router } from '@inertiajs/vue3';
import SectionTitle from '@/Components/SectionTitle.vue';
defineProps({
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>

    <div class="w-full fixed">
        <div class="flex justify-center top-20 relative">
            <SectionTitle>
            <template #title>
                <b class="text-6xl text-cyan-900 ">🎉BIENVENIDO!🎉</b>
            </template>
            <template #description>
                <span class="text-4xl mt-40 inset-0 flex items-center justify-center absolute">Selecciona un módulo...😁</span>
            </template>
            </SectionTitle>
        </div>
        <div class="flex justify-center py-64 pr-2 pl-2 gap-16">
            <div class="w-1/3 h-64 text-white bg-cyan-900 hover:opacity-70 hover:bg-sky-600 flex justify-center">
                <Link :href="route('menus.index')" :active="route().current('menus.*')" class="text-4xl hover:text-5xl text-center relative top-12"><b>MENU<div class="text-7xl hover:text-8xl mt-2">📒</div></b></Link>
            </div>
            <div class="w-1/3 h-64 text-white bg-cyan-900 hover:opacity-70 hover:bg-sky-600 flex justify-center">
                <Link :href="route('platos.index')" :active="route().current('platos.*')"class="hover:text-5xl text-4xl text-center relative top-12"><b>PLATOS<div class="text-7xl hover:text-8xl mt-2">🍽️</div></b></Link>
            </div>
        </div>
    </div>

</template>

