<script lang="ts" setup>
import { Head, useForm, InertiaForm } from "@inertiajs/vue3";
import { Link, usePage } from "@inertiajs/vue3";
import { defineComponent, watch, ref } from "vue";
import { computed } from "@vue/reactivity";
import NavbarLayout from "../../Layouts/NavbarLayout.vue";

defineProps({
    classes: {
        type: Object,
        required: true,
    },
});

interface Student {
    name: string,
    email: string,
    class_id: int,
    section_id: int,
}

const form: InertiaForm<Student> = useForm({
    name: "",
    email: "",
    class_id: 0,
    section_id: 0,
})

</script>
<template>
    <div class="min-h-full">
        <NavbarLayout>
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                        Create Students
                    </h1>
                </div>
            </header>
            <main>
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                    <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
                        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-12">
                            <form>
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                                        <div>
                                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                Student Information
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Use this form to create a new
                                                student.
                                            </p>
                                        </div>

                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="name"
                                                    class="block text-sm font-medium text-gray-700">Name</label>
                                                <input type="text" id="name" v-model="form.name"
                                                    class="mt-1 block w-full border rounded-md shadow-sm py-2 px-3 focus:outline-none sm:text-sm @error text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300 @enderror" />
                                                <p class="text-red-500">
                                                    This field is required
                                                </p>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="email" class="block text-sm font-medium text-gray-700">Email
                                                    Address</label>
                                                <input type="email" id="email" autocomplete="email" v-model="form.email"
                                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="class_id"
                                                    class="block text-sm font-medium text-gray-700">Class</label>
                                                <select id="class_id" v-model="form.class_id"
                                                    class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="">
                                                        Select a Class
                                                    </option>
                                                    <option v-for="item in classes.data" :key="item.id"
                                                        :value="item.id">
                                                        {{ item.name }}
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="section_id"
                                                    class="block text-sm font-medium text-gray-700">Section</label>
                                                <select id="section_id" v-model="form.section_id"
                                                    class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="">
                                                        Select a Section
                                                    </option>
                                                    <option value="1">
                                                        Section A
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <a href="#"
                                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-4">
                                            Cancel
                                        </a>
                                        <button type="submit"
                                            class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </NavbarLayout>
    </div>
</template>
