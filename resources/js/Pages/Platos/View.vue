<script>
export default {
    name: 'PlatoView'
}
</script>

<script setup>

import { Link } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3'
import ButtonArrow from '@/Components/Common/ButtonArrow.vue'
import SectionTitle from '@/Components/SectionTitle.vue'


defineProps({
    data: {
        type: Object,
        required: true
    }
})

const deletePlato = id => {
    if (confirm('Are you sure?')) {
        router.delete('platos.destroy',id)
    }
}
</script>


<template>
    <div class="flex justify-center items-center">
        <div class="flex gap-10 top-6 left-8 absolute">
            <ButtonArrow :href="route('platos.index')"/>
            <SectionTitle>
                <template #title>
                    <div class="sm:text-center">
                        Visualizar Platos Disponibles
                    </div>
                </template>
            </SectionTitle>
        </div>

        <div class="absolute inset-0 flex items-center justify-center ">
            <ul role="list" class="divide-y divide-gray-100">
                <p class="text-center text-2xl">Lista de Platos 🍽️</p>
                <li class="flex justify-between gap-x-6 py-5" v-for="plato in data">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">{{ plato.name }}</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                            <p class="text-md leading-6 text-gray-900">
                                <Link class="py-2 px-4" :href="route('platos.edit',plato.id)">Edit</Link> |
                                <Link class="py-2 px-4 text-red-600" @click="deletePlato(plato,id)">Delete</Link>
                            </p>
                    </div>
                </li>
            </ul>
        </div>
        </div>
        <div class="flex justify-between mt-2">
            <Link v-if="data.current_page > 1" :href="data.prev_page_url" class="py-2 px-4 rounded">
                PREVIOUS
            </Link>
            <div v-else></div>
            <Link v-if="data.current_page < data.last_page":href="data.next_page_url" class="py-2 px-4 rounded">
                NEXT
            </Link>
            <div v-else></div>
        </div>

</template>
