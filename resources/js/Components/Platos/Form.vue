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
                <div class="columns-2 flex-col items-justify justify-between mt-8">
                <div class="w-full">
                    <div class="w-full">
                            <div class="w-full mr-1">
                                <InputLabel for="name"value="Nombre del plato"/>
                                <TextInput id="name" v-model="form.name" type="text" autocomplete="name" class="w-full" />
                                <InputError :message="$page.props.errors.name" class="mt-2" />
                        </div>
                    </div>
                </div>
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
                            <InputLabel for="ing_condimento_id"value="Condimentos" />
                            <select name="ing_condimento_id" id="ing_condimento_id" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option v-for="ingrediente in ingredientes_condimentos" :value="ingrediente.id">{{ ingrediente.name }}</option>
                            </select>
                            <InputError :message="$page.props.errors.ing_condimento_id" class="mt-2" />
                        </div>
                    </div>
                </div>
               <div class="w-full mt-6">
                    <div class="flex">
                        <div class="w-full mr-1">
                            <InputLabel for="ing_proteina_id"value="Proteína" />
                            <select name="ing_proteina_id" id="ing_proteina_id" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option v-for="ingrediente in ingredientes_proteinas" :value="ingrediente.id">{{ ingrediente.name }}</option>
                            </select>
                            <InputError :message="$page.props.errors.ing_proteina_id" class="mt-2" />
                        </div>
                    </div>
                </div>
                <div class="w-full mt-6">
                    <div class="flex">
                        <div class="w-full mr-1">
                            <InputLabel for="ing_verdura_id"value="Verduras" />
                            <select name="ing_verdura_id" id="ing_verdura_id" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option v-for="ingrediente in ingredientes_verduras" :value="ingrediente.id">{{ ingrediente.name }}</option>
                            </select>
                            <InputError :message="$page.props.errors.ing_verdura_id" class="mt-2" />
                        </div>
                    </div>
                </div>
                <div class="w-full mt-6">
                    <div class="flex">
                        <div class="w-full mr-1">
                            <InputLabel for="ing_abarrote_id"value="Abarrotes" />
                            <select name="ing_abarrote_id" id="ing_abarrote_id" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option v-for="ingrediente in ingredientes_abarrotes" :value="ingrediente.id">{{ ingrediente.name }}</option>
                            </select>
                            <InputError :message="$page.props.errors.ing_abarrote_id" class="mt-2" />
                        </div>
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
