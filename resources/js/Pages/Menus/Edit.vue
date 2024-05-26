<script>
    export default {
        name: 'MenusEdit'
    }
</script>
<script setup>
import { useForm } from '@inertiajs/vue3';
import SectionTitle from '../../Components/SectionTitle.vue';
import ButtonArrow from '../../Components/Common/ButtonArrow.vue';
import MenuForm from '../../Components/Menus/Form.vue';

const props = defineProps({
    menu: {
        type: Object,
        required: true
    },
    platos: {
        type: Object,
        required: true
    }
})
const form = useForm({
    name: props.menu.name,
    plato_id: props.menu.plato_id,
    platos: props.platos.name
})
</script>

<template>
    <div class="flex justify-center items-center">
    <div class="flex gap-10 top-6 left-8 absolute">
        <ButtonArrow :href="route('menus.index')"/>
        <SectionTitle>
            <template #title>
                <div class="sm:text-center">
                    Editar Menu
                </div>
            </template>
        </SectionTitle>
    </div>

    <div class="py-12 top-8 relative">
            <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-12 bg-white border-b border-gray-200">
                            <MenuForm :form="form" :updating="true" :platos="platos" @submit="form.put(route('menus.update',menu.id))"/>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
</template>
