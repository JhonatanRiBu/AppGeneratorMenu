<script>
export default {
    name: 'PlatoForm'
}
</script>

<script setup>
import {ref} from 'vue'
import FormSection from '@/Components/FormSection.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
//import CollectionSelector from '@/Components/Common/CollectionSelector.vue'

defineProps({
    form: {
        type: Object,
        required: true
    },
    updating: {
        type: Boolean,
        required: false,
        default: false
    },
})

const categoriesSelected = ref([])

const onCategories = (_categories) => {
    categoriesSelected.value = _categories
}

defineEmits(['submit'])
</script>

<template>
    <FormSection @submitted="$emit('submit')">
        <template #description>
            {{ updating ? 'Modificando el Plato Seleccionado...' : 'Creando un nuevo plato...' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
               <InputLabel for="name"value="Nombre del plato" />
               <TextInput id="name" v-model="form.name" type="text" autocomplete="name" class="mt-1 block w-full" />
               <InputError :message="$page.props.errors.name" class="mt-2" />
               <div class="w-full mt-6">
                    <div class="flex">
                        <div class="w-full mr-1">
                            <InputLabel for="categ_plato_id"value="Categoria" />
                            <select name="categ_plato_id" id="categ_plato_id" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option v-for="cat in categ_platos" :value="cat.id">{{ cat.name }}</option>
                            </select>
                            <InputError :message="$page.props.errors.categ_plato_id" class="mt-2" />
                        </div>
                    </div>
                </div>
               <div class="w-full mt-6">
                    <div class="flex">
                        <div class="w-full mr-1">
                            <InputLabel for="ingrediente_id"value="Proteína" />
                            <select name="ingrediente_id" id="ingrediente_id" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option v-for="ingrediente in ingredientes" :value="ingrediente.id">{{ ingrediente.name }}</option>
                            </select>
                            <InputError :message="$page.props.errors.ingrediente_id" class="mt-2" />
                        </div>
                    </div>
                </div>
               <div class="w-full mt-6">
                    <div class="flex">
                        <div class="w-full mr-1">
                            <InputLabel for="ingrediente_id"value="Condimentos" />
                            <select name="ingrediente_id" id="ingrediente_id" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option v-for="ingrediente in ingredientes" :value="ingrediente.id">{{ ingrediente.name }}</option>
                            </select>
                            <InputError :message="$page.props.errors.ingrediente_id" class="mt-2" />
                        </div>
                    </div>
                </div>
                <div class="w-full mt-6">
                    <div class="flex">
                        <div class="w-full mr-1">
                            <InputLabel for="ingrediente_id"value="Verduras" />
                            <select name="ingrediente_id" id="ingrediente_id" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option v-for="ingrediente in ingredientes" :value="ingrediente.id">{{ ingrediente.name }}</option>
                            </select>
                            <InputError :message="$page.props.errors.ingrediente_id" class="mt-2" />
                        </div>
                    </div>
                </div>
                <div class="w-full mt-6">
                    <div class="flex">
                        <div class="w-full mr-1">
                            <InputLabel for="ingrediente_id"value="Abarrotes" />
                            <select name="ingrediente_id" id="ingrediente_id" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option v-for="ingrediente in ingredientes" :value="ingrediente.id">{{ ingrediente.name }}</option>
                            </select>
                            <InputError :message="$page.props.errors.ingrediente_id" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <<template #actions>
            <PrimaryButton>
                {{ updating ? 'Update' : 'Create' }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>
