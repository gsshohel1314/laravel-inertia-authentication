<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header class="sticky top-0 z-30 bg-white/80 backdrop-blur shadow-md">
        <nav class="mx-auto flex max-w-screen-xl items-center justify-between px-6 py-4">
            <a href="#" class="flex items-center gap-2">
                <span
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-br from-blue-600 to-indigo-600 font-bold text-white">M</span>
                <span class="text-xl font-semibold tracking-tight">{{ $page.props.appName }}</span>
            </a>

            <ul class="hidden md:flex items-center gap-8 text-sm">
                <li><Link :href="route('home')" class="hover:text-blue-600 transition">Home</Link></li>
                <li><a href="#" class="hover:text-blue-600 transition">Components</a></li>
                <li><a href="#" class="hover:text-blue-600 transition">Layouts</a></li>
                <li><a href="#" class="hover:text-blue-600 transition">Sandbox</a></li>
            </ul>

            <div class="hidden md:flex items-center gap-3">
                <Link 
                    :href="route('login')"
                    class="flex items-center gap-2 px-4 py-2 rounded-md text-sm hover:ring-1 hover:ring-gray-200 hover:bg-gray-100 transition duration-300"
                >
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path></svg>
                    Sign in
                </Link>
            </div>
        </nav>
    </header>
</template>