<script setup>
import { Head, Link, Form } from '@inertiajs/vue3';
</script>

<template>
    <Head>
        <title>Login</title>
        <meta head-key="description" name="description" content="This is login page">
    </Head>

    <section class="bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-white">
                        Sign in to your account
                    </h1>
                    <Form :action="route('login.store')" method="post" #default="{errors, processing}" class="space-y-4 md:space-y-6">
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
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input 
                                        id="remember" 
                                        aria-describedby="remember" 
                                        type="checkbox"
                                        class="w-4 h-4 border rounded bg-gray-700 border-gray-600 focus:ring-2 focus:ring-blue-500 ring-offset-gray-800"
                                    >
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-semibold hover:underline text-blue-500">
                                Forgot password?
                            </a>
                        </div>

                        <button
                            :disabled="processing"
                            type="submit"
                            class="w-full text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-800"
                        >
                            {{ processing ? 'Signing...' : 'Sign in' }}
                        </button>
                        <p class="text-sm font-light text-gray-400">
                            Don’t have an account yet? <Link :href="route('register')" class="font-semibold hover:underline text-blue-500">Sign up</Link>
                        </p>
                    </Form>
                </div>
            </div>
        </div>
    </section>
</template>