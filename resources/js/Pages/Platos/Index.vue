<script>
export default {
    name: 'PlatosIndex'
}
</script>

<script setup>
import ButtonArrow from '@/Components/Common/ButtonArrow.vue';
import SectionTitle from '@/Components/SectionTitle.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="flex items-center justify-center h-screen">
        <div class="flex gap-10 top-10 left-10 absolute">
            <ButtonArrow :href="route('welcome')"/>
            <SectionTitle>
                <template #title>
                    Módulo Platos
                </template>
            </SectionTitle>
        </div>
        <div>
            <div class="flex flex-col gap-10">
            <div class="bg-red-300 w-80 h-16 flex justify-center items-center hover:bg-red-500 hover:text-white hover:h-20 hover:text-2xl">
                <Link :href="route('platos.create')" class="cursor-pointer text-2xl" >Registrar nuevo Plato</Link>
            </div>
            <div class="bg-red-300 w-80 h-16 text-center flex justify-center items-center hover:bg-red-500 hover:text-white hover:h-20 hover:text-2xl">
                <Link :href="route('platos.view')" class="cursor-pointer text-2xl">Visualizar Platos</Link>
            </div>
        </div>
        </div>
    </div>
</template>

