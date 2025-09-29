<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { HomeIcon, UserGroupIcon, CubeIcon } from '@heroicons/vue/24/solid';

const page = usePage();
</script>

<template>
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-r sm:translate-x-0 bg-gray-800 border-gray-700" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <Link
                        :href="route('dashboard')" 
                        class="flex items-center p-2 rounded-lg group"
                        :class="page.props.currentRouteName.startsWith('dashboard') ? 'text-white bg-gray-700' : 'text-gray-400 hover:text-white hover:bg-gray-700'"
                    >
                        <HomeIcon class="w-5 h-5" />
                        <span class="ms-3">Dashboard</span>
                    </Link>
                </li>
                
                <li>
                    <Link 
                        :href="route('users.index')"
                        class="flex items-center p-2 rounded-lg group"
                        :class="page.props.currentRouteName.startsWith('users.') ? 'text-white bg-gray-700' : 'text-gray-400 hover:text-white hover:bg-gray-700'"
                    >
                        <UserGroupIcon class="w-5 h-5" />
                        <span class="ms-3">Users</span>
                    </Link>
                </li>

                <li>
                    <Link 
                        :href="route('posts.index')"
                        class="flex items-center p-2 rounded-lg group"
                        :class="page.props.currentRouteName.startsWith('posts.') ? 'text-white bg-gray-700' : 'text-gray-400 hover:text-white hover:bg-gray-700'"
                    >
                        <CubeIcon class="w-5 h-5" />
                        <span class="ms-3">Posts</span>
                    </Link>
                </li>

                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                        <svg class="shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</template>