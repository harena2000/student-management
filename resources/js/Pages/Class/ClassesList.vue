<script lang="ts" setup>
import { usePage } from "@inertiajs/vue3";
import { defineComponent, watch, ref } from "vue";
import { computed } from "@vue/reactivity";
import NavbarLayout from "../../Layouts/NavbarLayout.vue"

</script>
<template>
  <div class="min-h-full">
    <NavbarLayout>
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Classes</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
            </div>
        </main>
    </NavbarLayout>

  </div>
</template>
