<script setup>
import AppLayout from '../../Layouts/AppLayout2.vue';
import Pagination from '../../Components2/Pagination.vue'
import { Head } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3'
import { ref, watch } from "vue";
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    users: Object,
    filters: Object
});

let search = ref(props.filters.search);

watch(search, value => {
    router.get('/users', { search: value }, { preserveState: true })
})

</script>

<template>
    <Head title="Administración de Usuarios" />
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Administración de Usuarios</h2>
        </template>

        <div class="container">
            <h1 class="text-lg mb-10">Administración de Usuarios</h1>

            <div class="md:flex md:justify-between mb-2">
                    <a href="#"></a>

                    <input type="text" class="rounded w-full md:w-1/2" v-model="search" placeholder="Buscar...." />
            </div>

            <div class="container text-base">

                <table class="w-full flex flex-row flex-nowrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                    <thead class="text-white">
                        <tr class="bg-blue-400 flex flex-col flex-nowrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0"
                            v-for="users in users.data" :key="users.id">
                            <th class="p-4 text-left">ID</th>
                            <th class="p-3 text-left">Nombre</th>
                            <th class="p-3 text-left">Email</th>
                            <th class="p-3 text-left">Rol</th>
                            <th class="p-3 text-left">Acciones</th>

                        </tr>
                    </thead>
                    <tbody class="flex-1 sm:flex-none">
                        <tr class="flex flex-col flex-nowrap sm:table-row mb-2 sm:mb-0" v-for="users in users.data"
                        :key="users.id">
                            <td class="border-grey-light md:border hover:bg-gray-100 p-4">{{ users.id }}</td>
                            <td class="border-grey-light md:border hover:bg-gray-100 p-3.5">{{ users.name }}</td>
                            <td class="border-grey-light md:border hover:bg-gray-100 p-3">{{ users.email }}</td>
                            <td class="border-grey-light md:border hover:bg-gray-100 p-3.5"><span v-for="rol in users.roles">{{ rol.name }}</span></td>
                            <td class="border-grey-light md:border hover:bg-gray-100 p-3.5">
                                <Link :href="`users/${users.id}/edit`"
                                    class="bg-blue-700 hover:bg-blue-400 px-3 py-2 mr-2 rounded-lg text-white hover:underline">
                                Edit
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <Pagination :links="users.links" />
            </div>

        </div>
    </AppLayout>
</template>

<style>
@media (min-width: 640px) {
    table {
        display: inline-table !important;
    }

    thead tr:not(:first-child) {
        display: none;
    }
}

td:not(:last-child) {
    border-bottom: 0;
}

th:not(:last-child) {
    border-bottom: 2px solid rgba(0, 0, 0, .1);
}
</style>
