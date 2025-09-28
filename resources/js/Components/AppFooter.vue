<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer class="bg-gray-900 text-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo & Description -->
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <span
                        class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-br from-blue-600 to-indigo-600 font-bold text-white">M</span>
                    <span class="text-lg font-semibold">{{ $page.props.appName }}</span>
                </div>
                <p class="text-gray-400 text-sm">A tiny playground for great UIs. Build, test, and launch faster with a
                    clean design system.</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-gray-300 font-semibold mb-3">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white transition">Home</a></li>
                    <li><a href="#" class="hover:text-white transition">Components</a></li>
                    <li><a href="#" class="hover:text-white transition">Layouts</a></li>
                    <li><a href="#" class="hover:text-white transition">Sandbox</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <h4 class="text-gray-300 font-semibold mb-3">Legal</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white transition">Privacy</a></li>
                    <li><a href="#" class="hover:text-white transition">Terms</a></li>
                    <li><a href="#" class="hover:text-white transition">Cookies</a></li>
                </ul>
            </div>

            <!-- Social -->
            <div>
                <h4 class="text-gray-300 font-semibold mb-3">Follow Us</h4>
                <div class="flex items-center gap-4">
                    <!-- Twitter -->
                    <a href="#" class="hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0022.4.36a9.09 9.09 0 01-2.88 1.1 4.52 4.52 0 00-7.69 4.12A12.84 12.84 0 013 2.1a4.52 4.52 0 001.4 6.04A4.41 4.41 0 012 7.7v.06a4.52 4.52 0 003.63 4.43 4.52 4.52 0 01-2.04.08 4.52 4.52 0 004.22 3.14A9.05 9.05 0 012 19.54 12.77 12.77 0 008.29 21c7.55 0 11.68-6.26 11.68-11.68 0-.18 0-.36-.01-.54A8.36 8.36 0 0023 3z" />
                        </svg>
                    </a>
                    <!-- Facebook -->
                    <a href="#" class="hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M22 12a10 10 0 10-11.5 9.95v-7.05h-2.35V12h2.35v-1.85c0-2.3 1.37-3.57 3.46-3.57.99 0 2.03.18 2.03.18v2.24h-1.15c-1.14 0-1.5.71-1.5 1.44V12h2.56l-.41 2.9h-2.15v7.05A10 10 0 0022 12z" />
                        </svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="#" class="hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M4.98 3.5A2.5 2.5 0 102.5 6a2.5 2.5 0 002.48-2.5zM2 8.99h5v12H2v-12zM9 8.99h4.79v1.65h.07c.67-1.27 2.3-2.6 4.73-2.6 5.06 0 6 3.33 6 7.67v8.28h-5v-7.34c0-1.75-.03-4-2.44-4-2.45 0-2.83 1.91-2.83 3.88v7.46H9v-12z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-10 text-center text-gray-500 text-xs">
            © 2025 {{ $page.props.appName }}. All rights reserved.
        </div>
    </footer>
</template>