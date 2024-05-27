<script>
    export default {
        name: 'MenusCreate'
    }
</script>
<script setup>
import { useForm } from '@inertiajs/vue3';
import SectionTitle from '../../Components/SectionTitle.vue';
import ButtonArrow from '../../Components/Common/ButtonArrow.vue';
import MenuForm from '@/Components/Menus/Form.vue';

defineProps({
    platos: {
        type: Object,
        required: true
    },
})
const form = useForm({
    name: '',
})
</script>

<template>
    <div class="flex justify-center items-center">
    <div class="flex gap-10 top-6 left-8 absolute">
        <ButtonArrow :href="route('menus.index')"/>
        <SectionTitle>
            <template #title>
                <div class="sm:text-center">
                    {{ updating ? 'Editar Menu' : 'Crear Nuevo Menu' }}
                </div>
            </template>
        </SectionTitle>
    </div>

    <div class="py-12 top-8 relative">
            <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-12 bg-white border-b border-gray-200">
                            <MenuForm :form="form" :platos="platos" @submit="form.post(route('menus.store'))"/>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
</template>

