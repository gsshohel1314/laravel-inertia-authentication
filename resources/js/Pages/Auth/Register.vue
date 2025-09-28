<script setup>
import { Head, Link, Form } from '@inertiajs/vue3';
import AppLayout from '../../Layouts/App.vue';

defineOptions({ layout: AppLayout })
</script>

<template>
    <Head>
        <title>Register</title>
        <meta head-key="description" name="description" content="This is register page">
    </Head>

    <div class="flex items-center justify-center min-h-[80vh] px-6 bg-gray-50">
        <div class="w-full max-w-md bg-white rounded-xl shadow-md p-8">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-1">Create an account</h2>
            <p class="text-sm text-center text-gray-600 mb-6">Enter your details below to create your account</p>

            <Form :action="route('register.store')" method="post" #default="{errors, processing}" class="space-y-5">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Full name"
                        class="w-full text-sm px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                        :class="{'border-red-500 focus:border-red-500 focus:ring-red-500' : errors.name}"
                    >
                    <div v-if="errors.name" class="text-red-600 text-xs italic">{{ errors.name }}</div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                    <input
                        type="text"
                        id="email"
                        name="email"
                        placeholder="email@example.com"
                        class="w-full text-sm px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                        :class="{'border-red-500 focus:border-red-500 focus:ring-red-500' : errors.email}"
                    >
                    <div v-if="errors.email" class="text-red-600 text-xs italic">{{ errors.email }}</div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password"
                        class="w-full text-sm px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                        :class="{'border-red-500 focus:border-red-500 focus:ring-red-500' : errors.password}"
                    >
                    <div v-if="errors.password" class="text-red-600 text-xs italic">{{ errors.password }}</div>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Confirm Password"
                        class="w-full text-sm px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                    >
                </div>

                <button
                    :disabled="processing"
                    type="submit"
                    class="w-full flex items-center justify-center gap-2 px-4 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 transition duration-300"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                    {{ processing ? 'Creating...' : 'Create Account' }}
                </button>
            </Form>

            <div class="mt-6 text-center text-sm text-gray-500">
                Already have an account?
                <Link :href="route('login')" class="text-blue-600 hover:underline">Sign in</Link>
            </div>
        </div>
    </div>
</template>