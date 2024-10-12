<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div
        class="flex min-h-screen flex-col items-center bg-gradient-to-r from-blue-200 to-cyan-200 pt-6 sm:justify-center sm:pt-0"
    >

        <div class="absolute inset-0 opacity-30 z-0">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full mix-blend-overlay filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-300 rounded-full mix-blend-overlay filter blur-3xl animate-pulse"></div>
        </div>


        <div>
            <Link href="/">
                <ApplicationLogo class="h-20 w-20 fill-current text-gray-500" />
            </Link>
        </div>

        <div
            class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg z-10"
        >
            <slot />
        </div>
    </div>
</template>
