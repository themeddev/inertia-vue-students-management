<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Student Management Platform" />
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 relative">
        <div
            class="relative flex min-h-screen flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white bg-gradient-to-br from-blue-400 via-indigo-500 to-cyan-500 animate-gradient bg-[length:100%_400%]"
        >
            <div class="absolute inset-0 opacity-30">
                <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full mix-blend-overlay filter blur-3xl animate-pulse"></div>
                <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-300 rounded-full mix-blend-overlay filter blur-3xl animate-pulse"></div>
            </div>

            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header
                    class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3"
                >
                    <div class="flex lg:col-start-2 lg:justify-center">
                        <img 
                            src="../../../public/build/assets/images/logo.png" 
                            alt="Student Management Platform logo"
                            class="h-12 w-auto lg:h-16"
                        >
                    </div>
                    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </Link>
                        </template>
                    </nav>
                </header>

                <main class="mt-6">
                    <!-- hero -->
                        <div class="w-full py-24 px-6 bg-cover bg-no-repeat bg-center relative z-10">
                        
                        <div class="container max-w-4xl mx-auto text-center">
                            <h1 class="text-xl leading-tight md:text-3xl text-center text-gray-100 mb-3">Student Management Platform</h1>
                            <p class="text-md md:text-lg text-center text-muted ">Efficiently manage student data, including class enrollment and section assignments. Easily add, edit, search, and view student details through an intuitive interface.</p>

                            <a href="/register" class="mt-6 inline-block bg-white text-black no-underline px-4 py-3 shadow-lg hover:bg-gray-100">Get started</a>
                        </div>

                    </div>
                    <!-- /hero -->
                </main>

                <footer
                    class="py-16 text-center text-sm text-black dark:text-white/70"
                >
                    <a  
                        href="https://themeddev-portfolio.netlify.app/" 
                        target="_blank"
                        class="hover:text-pink-300 duration-150"
                    >
                        ©themeddev,
                    </a>
                    <a 
                        href="https://github.com/themeddev/inertia-vue-students-management"
                        target="_blank"
                        class="hover:text-pink-300 duration-150"
                    >
                        star it on github 😁.
                    </a>
                </footer>
            </div>
        </div>
    </div>
</template>
