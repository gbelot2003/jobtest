<script setup>
import AppLayout from '../../Layouts/AppLayout2.vue';
import { Head } from '@inertiajs/vue3';
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

let form = useForm({
    title: '',
    price: '',
    description: '',
    category: '',
    image: ''
});

let submit = () => {
    form.post("/admin/products");
}

</script>

<template>

    <Head title="Creación de Productos" />
    <AppLayout>
        <div class="container">
            <h1 class="text-lg">Creación de Cursos</h1>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6 mb-7">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="md:col-span-1 flex justify-between">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium text-gray-900">Datos De Profuctos</h3>
                                <p class="mt-1 text-sm text-gray-600">Creación de Nuevo Producto</p>
                            </div>
                        </div>
                        <form @submit.prevent="submit">
                            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">

                                <div class="grid grid-cols-6 gap-6">

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="nombre">Nombre</label>
                                        <input v-model="form.title" id="nombre"
                                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                                            :class="{ 'border-red-500': form.errors.title }" type="text">
                                        <div class="text-red-600" v-if="form.errors.title">{{ form.errors.title }}</div>
                                    </div>


                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="nombre">descripción</label>
                                        <textarea v-model="form.description" id="nombre"
                                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                                            :class="{ 'border-red-500': form.errors.description }" type="text" />
                                        <div class="text-red-600" v-if="form.errors.description">{{
                                            form.errors.description }}</div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="nombre">Precio</label>
                                        <input v-model="form.price" id="nombre"
                                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                                            :class="{ 'border-red-500': form.errors.price }" type="number">
                                        <div class="text-red-600" v-if="form.errors.price">{{ form.errors.price }}</div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="nombre">Categoria</label>
                                        <input v-model="form.category" id="nombre"
                                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                                            :class="{ 'border-red-500': form.errors.category }" type="text">
                                        <div class="text-red-600" v-if="form.errors.category">{{ form.errors.category }}
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="nombre">Imagen</label>
                                        <input v-model="form.image" id="nombre"
                                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                                            :class="{ 'border-red-500': form.errors.image }" type="text">
                                        <div class="text-red-600" v-if="form.errors.image">{{ form.errors.image }}</div>
                                    </div>
                                </div>
                                <div
                                class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Actualizar
                                </button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
