<script>
    export default {
        name: 'PlatosCreate'
    }
</script>
<script setup>
import { useForm } from '@inertiajs/vue3';
import SectionTitle from '../../Components/SectionTitle.vue';
import ButtonArrow from '../../Components/Common/ButtonArrow.vue';
import PlatoForm from '@/Components/Platos/Form.vue';

defineProps({
    categ_platos: {
        type: Object,
        required: true
    },
     ingredientes_condimentos: {
        type: Object,
        required: true
    },
    ingredientes_abarrotes: {
        type: Object,
        required: true
    },
    ingredientes_proteinas: {
        type: Object,
        required: true
    },
    ingredientes_verduras: {
        type: Object,
        required: true
    },
})
const form = useForm({
    name: ''
})
</script>

<template>
    <div class="flex justify-center items-center ">
    <div class="flex gap-10 top-10 left-10 absolute">
        <ButtonArrow :href="route('platos.index')"/>
        <SectionTitle>
            <template #title>
                {{ updating ? 'Editar Plato' : 'Crear Nuevo Plato' }}
            </template>
        </SectionTitle>
    </div>

    <div class="py-12 top-8 relative">
            <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-12 bg-white border-b border-gray-200">
                            <PlatoForm :form="form" :categ_platos="categ_platos" :ingredientes_condimentos="ingredientes_condimentos"
                            :ingredientes_abarrotes="ingredientes_abarrotes"
                            :ingredientes_proteinas="ingredientes_proteinas"
                            :ingredientes_verduras="ingredientes_verduras"/>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
</template>
