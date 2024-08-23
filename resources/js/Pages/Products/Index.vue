<script setup>
import AppLayout from '../../Layouts/AppLayout2.vue';
import Pagination from '../../Components2/Pagination.vue'
import { Head } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3'
import { ref, watch } from "vue";
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    products: Object,
    filters: Object
});

let search = ref(props.filters.search);

watch(search, value => {
    router.get('/products', { search: value }, { preserveState: true })
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

            </div>
        </div>
    </AppLayout>

</template>
