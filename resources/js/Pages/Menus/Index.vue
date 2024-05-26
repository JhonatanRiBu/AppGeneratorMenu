<script>
export default {
    name: 'MenusIndex'
}
</script>

<script setup>
import ButtonArrow from '@/Components/Common/ButtonArrow.vue';
import SectionTitle from '@/Components/SectionTitle.vue';
import { Link } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3'
defineProps({
    menus: {
        type: Object,
        required: true
    }
})
const deleteMenus = id => {
    if (confirm('Are you sure?')) {
        router.delete(route('menus.destroy',id))
    }
}

</script>

<template>
    <div class="flex items-center justify-center h-screen">
        <div class="flex gap-10 top-10 left-10 absolute">
            <ButtonArrow :href="route('welcome')"/>
            <SectionTitle>
                <template #title>
                    Módulo Menús
                </template>
            </SectionTitle>
        </div>
        <div>
            <div class="flex items-center justify-center ">
            <div class="bg-red-300 w-80 h-16 flex justify-center items-center hover:bg-red-500 hover:text-white hover:h-20 hover:text-2xl rounded-md">
                <Link :href="route('menus.create')" class="cursor-pointer text-2xl" >Registrar nuevo Menú</Link>
            </div>
            <!-- <div class="bg-red-300 w-80 h-16 text-center flex justify-center items-center hover:bg-red-500 hover:text-white hover:h-20 hover:text-2xl">
                <Link :href="route('platos.create')" class="cursor-pointer text-2xl">Visualizar Platos</Link>
             -->
             </div>
            <div class="mt-4">
                <ul role="list" class="divide-y divide-gray-100">
                    <div class="text-center text-xl">Listado de Menús 📒</div>
                    <li class="flex justify-between gap-x-6 py-5" v-for="menu in menus.data">
                        <div class="flex min-w-0 gap-x-4">
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-6 text-gray-900">{{ menu.name }}</p>
                            </div>
                        </div>
                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                            <p class="text-md leading-6 text-gray-900">
                                <Link class="py-2 px-4" :href="route('menus.edit',menu.id)">Edit</Link> |
                                <Link class="py-2 px-4 text-red-600" @click="deleteMenus(menu,id)" >Delete</Link>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="flex justify-between mt-2">
                <Link v-if="menus.current_page > 1" :href="menus.prev_page_url" class="py-2 px-4 rounded">
                    PREVIOUS
                </Link>
                <div v-else></div>
                <Link v-if="menus.current_page < menus.last_page":href="menus.next_page_url" class="py-2 px-4 rounded">
                    NEXT
                </Link>
                <div v-else></div>
            </div>

        </div>
    </div>
</template>

