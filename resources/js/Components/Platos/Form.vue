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
import CollectionSelector from '@/Components/Common/CollectionSelector.vue'

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

const ing_condimentosSelected = ref([])
const ing_verdurasSelected = ref([])
const ing_abarrotesSelected = ref([])
const ing_proteinasSelected = ref([])

const onIngCondimentos = (_ing_condimentos) => {
    ing_condimentosSelected.value = _ing_condimentos
}
const onIngVerduras = (_ing_verduras) => {
    ing_verdurasSelected.value = _ing_verduras
}
const onIngAbarrotes = (_ing_abarrotes) => {
    ing_abarrotesSelected.value = _ing_abarrotes
}
const onIngProteinas = (_ing_proteinas) => {
    ing_proteinasSelected.value = _ing_proteinas
}

defineEmits(['submit'])
</script>

<template>
    <FormSection @submitted="$emit('submit')">
        <template #description>
            <div class="text-sm text-center left-auto absolute">
                {{ updating ? 'Modificando el Plato Seleccionado...' : 'Creando un nuevo plato...' }}
            </div>
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <div>
                <div class="w-full">
                    <div class="w-full mt-6">
                            <div class="w-full mr-4">
                                <InputLabel for="name"value="Nombre del plato"/>
                                <TextInput id="name" v-model="form.name" type="text" autocomplete="name" class="w-full" />
                                <InputError :message="$page.props.errors.name" class="mt-2" />
                        </div>
                    </div>
                </div>
               <div class="w-full mt-6">
                    <div class="flex">
                        <div class="w-full">
                            <InputLabel for="categ_plato_id"value="Categoria" />
                            <select name="categ_plato_id" id="categ_plato_id" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option v-for="cat in categ_platos" :value="cat.id">{{ cat.name }}</option>
                            </select>
                            <InputError :message="$page.props.errors.categ_plato_id" class="mt-2" />
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </template>
        <template #actions>
            <div>
                <PrimaryButton>
                {{ updating ? 'Update' : 'Create' }}
            </PrimaryButton>
            </div>
        </template>
    </FormSection>
</template>
