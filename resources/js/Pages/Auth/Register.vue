<script setup>
import { Head, Link, Form } from '@inertiajs/vue3';
</script>

<template>
    <Head>
        <title>Register</title>
        <meta head-key="description" name="description" content="This is register page">
    </Head>

    <section class="bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-white">
                        Create an account
                    </h1>
                    <Form :action="route('register.store')" method="post" #default="{errors, processing}" class="space-y-4 md:space-y-6">
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-semibold text-white">First name</label>
                            <input
                                type="text" 
                                name="first_name" 
                                id="first_name"
                                placeholder="Jhon"
                                class="block w-full px-3 py-2 border rounded-lg text-sm text-white placeholder-gray-400 bg-gray-700 border-gray-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                :class="{'border-red-500 focus:border-red-500 focus:ring-red-500' : errors.first_name}"
                            >
                            <div v-if="errors.first_name" class="text-red-600 text-sm mt-1">{{ errors.first_name }}</div>
                        </div>

                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-semibold text-white">Last name</label>
                            <input
                                type="text" 
                                name="last_name" 
                                id="last_name"
                                placeholder="Doe"
                                class="block w-full px-3 py-2 border rounded-lg text-sm text-white placeholder-gray-400 bg-gray-700 border-gray-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                :class="{'border-red-500 focus:border-red-500 focus:ring-red-500' : errors.last_name}"
                            >
                            <div v-if="errors.last_name" class="text-red-600 text-sm mt-1">{{ errors.last_name }}</div>
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm font-semibold text-white">Email</label>
                            <input
                                type="email" 
                                name="email" 
                                id="email"
                                placeholder="email@example.com"
                                class="block w-full px-3 py-2 border rounded-lg text-sm text-white placeholder-gray-400 bg-gray-700 border-gray-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                :class="{'border-red-500 focus:border-red-500 focus:ring-red-500' : errors.email}"
                            >
                            <div v-if="errors.email" class="text-red-600 text-sm mt-1">{{ errors.email }}</div>
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-sm font-semibold text-white">Password</label>
                            <input
                                type="password" 
                                name="password" 
                                id="password"
                                placeholder="Password"
                                class="block w-full px-3 py-2 border rounded-lg text-sm text-white placeholder-gray-400 bg-gray-700 border-gray-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                :class="{'border-red-500 focus:border-red-500 focus:ring-red-500' : errors.password}"
                            >
                            <div v-if="errors.password" class="text-red-600 text-sm mt-1">{{ errors.password }}</div>
                        </div>

                        <div>
                            <label for="password_confirmation" class="block mb-2 text-sm font-semibold text-white">Confirm Password</label>
                            <input
                                type="password" 
                                name="password_confirmation" 
                                id="password_confirmation"
                                placeholder="Confirm Password"
                                class="block w-full px-3 py-2 border rounded-lg text-sm text-white placeholder-gray-400 bg-gray-700 border-gray-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            >
                        </div>

                        <button
                            :disabled="processing"
                            type="submit"
                            class="w-full text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-800"
                        >
                            {{ processing ? 'Creating...' : 'Create Account' }}
                        </button>
                        <p class="text-sm font-light text-gray-400">
                            Already have an account? <Link :href="route('login')" class="font-semibold hover:underline text-blue-500">Sign in</Link>
                        </p>
                    </Form>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="flex items-center justify-center min-h-[80vh] px-6 bg-gray-50">
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
    </div> -->
</template>