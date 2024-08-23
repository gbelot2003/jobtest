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
                    <a href="#"></a>

                    <input type="text" class="rounded w-full md:w-1/2" v-model="search" placeholder="Buscar...." />
            </div>
            <div class="container text-base">
                <table class="w-full flex flex-row flex-nowrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                    <thead class="text-white">
                        <tr class="bg-blue-400 flex flex-col flex-nowrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0"
                            v-for="product in products.data" :key="product.id">
                            <th class="p-4 text-left">ID</th>
                            <th class="p-3 text-left">Image</th>
                            <th class="p-3 text-left">Title</th>
                            <th class="p-3 text-left">Description</th>
                            <th class="p-3 text-left">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="flex flex-col flex-nowrap sm:table-row mb-2 sm:mb-0" v-for="product in products.data" :key="product.id">
                            <td class="border-grey-light md:border hover:bg-gray-100 p-4">{{ product.id }}</td>
                            <td class="border-grey-light md:border hover:bg-gray-100 p-3"><img :src="product.image" alt="Italian Trulli" /></td>
                            <td class="border-grey-light md:border hover:bg-gray-100 p-3">{{ product.title }}</td>
                            <td class="border-grey-light md:border hover:bg-gray-100 p-3">{{ product.description }}</td>
                            <td class="border-grey-light md:border hover:bg-gray-100 p-3">$.{{ product.price }}.00</td>
                        </tr>
                    </tbody>
                </table>
                <Pagination :links="products.links" />
            </div>
        </div>
    </AppLayout>

</template>
