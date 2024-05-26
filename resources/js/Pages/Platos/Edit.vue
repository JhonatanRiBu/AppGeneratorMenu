<script>
    export default {
        name: 'PlatosEdit'
    }
</script>
<script setup>
import { useForm } from '@inertiajs/vue3';
import SectionTitle from '../../Components/SectionTitle.vue';
import ButtonArrow from '../../Components/Common/ButtonArrow.vue';
import PlatoForm from '../../Components/Platos/Form.vue';

const props = defineProps({
    plato: {
        type: Object,
        required: true
    },
    categ_platos: {
        type: Object,
        required: true
    }
})
const form = useForm({
    name: props.plato.name,
    categ_plato_id: props.plato.categ_plato_id,
    categ_platos: props.categ_platos.name
})
</script>

<template>
    <div class="flex justify-center items-center">
    <div class="flex gap-10 top-6 left-8 absolute">
        <ButtonArrow :href="route('platos.index')"/>
        <SectionTitle>
            <template #title>
                <div class="sm:text-center">
                    Editar Plato
                </div>
            </template>
        </SectionTitle>
    </div>

    <div class="py-12 top-8 relative">
            <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-12 bg-white border-b border-gray-200">
                            <PlatoForm :form="form" :updating="true" :categ_platos="categ_platos" @submit="form.put(route('platos.update',plato.id))"/>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
</template>
