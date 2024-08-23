<script setup>
import AppLayout from '../../Layouts/AppLayout2.vue';
import Pagination from '../../Components2/Pagination.vue'
import { Head } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3'
import { ref, watch } from "vue";
import { Link } from '@inertiajs/vue3'
import numeral from 'numeral';

const props = defineProps({
    products: Object,
    filters: Object
});

let search = ref(props.filters.search);

watch(search, value => {
    router.get('/admin/products', { search: value }, { preserveState: true })
})

</script>
<template>
    <Head title="Administración de Usuarios" />
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Administración de Productos</h2>
        </template>
        <div class="container">
            <h1 class="text-lg mb-10">Administración de Productos</h1>
            <div class="md:flex md:justify-between mb-2">
                <Link href="/admin/products/create" class="leading-tight py-3 px-2 text-white rounded-full text-center bg-blue-950">
                    + Nuevo <span class="mdi mdi-plus-circle-outline"></span></Link>

                    <input type="text" class="rounded w-full md:w-1/2" v-model="search" placeholder="Buscar...." />
            </div>
            <div class="container text-base">
                <table class="w-full flex flex-row flex-nowrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                    <thead class="text-white">
                        <tr class="bg-blue-400 flex flex-col flex-nowrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0"
                            v-for="product in products.data" :key="product.id">
                            <th class="p-4 text-left">ID</th>
                            <th class="p-3 text-left">Nombre</th>
                            <th class="p-3 text-left">Precio</th>
                            <th class="p-3 text-left">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="flex flex-col flex-nowrap sm:table-row mb-2 sm:mb-0" v-for="product in products.data" :key="product.id">
                            <td class="border-grey-light md:border hover:bg-gray-100 p-4">{{ product.id }}</td>
                            <td class="border-grey-light md:border hover:bg-gray-100 p-3">{{ product.title }}</td>
                            <td class="border-grey-light md:border hover:bg-gray-100 p-3">$.{{ product.price }}.00</td>
                            <td class="border-grey-light md:border hover:bg-gray-100 p-3">
                                <Link :href="`/admin/products/${product.id}/edit`"
                                    class="bg-blue-700 hover:bg-blue-400 px-3 py-2 mr-2 rounded-lg text-white hover:underline">
                                Edit
                                </Link>
                                <Link :href="`/admin/products/${product.id}`"
                                    class="bg-red-800 hover:bg-blue-400 px-3 py-2 rounded-lg text-white hover:underline">
                                Delete
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <Pagination :links="products.links" />
            </div>
        </div>
    </AppLayout>

</template>
