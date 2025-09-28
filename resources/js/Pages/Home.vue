<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '../Layouts/App.vue';

defineOptions({ layout: AppLayout })
</script>

<template>
    <Head>
        <title>Home</title>
        <meta head-key="description" name="description" content="This is home page">
    </Head>

    <section class="relative bg-gradient-to-r from-blue-100 via-white to-indigo-100 py-32 text-center">
        <h1
            class="text-4xl md:text-5xl font-extrabold tracking-tight mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600">
            Practice professional layouts
        </h1>
        <p class="text-gray-700 mb-8 max-w-xl mx-auto text-lg">
            A clean Vue 3 + Tailwind starting point with a responsive navbar, flexible content area, and a footer that
            stays put.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#"
                class="inline-flex items-center gap-2 px-6 py-3 rounded-md bg-blue-600 text-white font-semibold hover:bg-blue-700 transition duration-300">
                Start Building
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
            <a href="#"
                class="inline-flex items-center gap-2 px-6 py-3 rounded-md ring-1 ring-gray-300 hover:bg-gray-100 transition duration-300">
                View Examples
            </a>
        </div>
    </section>

    <section class="mx-auto max-w-screen-xl px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <span class="inline-flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
                        </svg>
                    </span>
                    <h3 class="font-semibold text-lg">Responsive by default</h3>
                </div>
                <p class="text-gray-600 text-sm">Practice mobile-first layouts with a flexible grid and modern utility
                    classes.</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <span
                        class="inline-flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-50 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </span>
                    <h3 class="font-semibold text-lg">Clean components</h3>
                </div>
                <p class="text-gray-600 text-sm">Tidy, minimal markup that you can extend as you learn new patterns.</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <span
                        class="inline-flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v18m9-9H3" />
                        </svg>
                    </span>
                    <h3 class="font-semibold text-lg">Extend easily</h3>
                </div>
                <p class="text-gray-600 text-sm">Add sections, cards, and layouts without fighting the base structure.
                </p>
            </div>
        </div>
    </section>
</template>