<script setup>
import { Head, Link, Form } from '@inertiajs/vue3';
import AppLayout from '../../Layouts/App.vue';

defineOptions({layout: AppLayout})

defineProps({
    user: Object
})
</script>

<template>
    <Head>
        <title>Edit</title>
        <meta head-key="description" name="description" content="This is user edit page">
    </Head>

    <div class="p-8 rounded-lg max-w-7xl mx-auto bg-gray-800">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-white">Edit User</h2>
            <Link 
                :href="route('users.index')"
                class="py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
            >
                ← Back
            </Link>
        </div>

        <Form :action="route('users.update', user.id)" method="put" #default="{errors, processing}">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                    <input
                        type="text"
                        id="first_name" 
                        name="first_name"
                        placeholder="John"
                        :value="user.first_name"
                        class="p-2n w-full block text-sm rounded-lg border text-white bg-gray-700 placeholder-gray-400 border-gray-600 focus:border-blue-500 focus:ring-blue-500"
                        :class="{'border-red-600 focus:border-red-500 focus:ring-red-500' : errors.first_name}"
                    />
                    <div v-if="errors.first_name" class="text-red-600 text-sm mt-1 font-semibold">{{ errors.first_name }}</div>
                </div>

                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                    <input 
                        type="text" 
                        id="last_name"
                        name="last_name"
                        placeholder="Doe"
                        :value="user.last_name"
                        class="p-2n w-full block text-sm rounded-lg border text-white bg-gray-700 placeholder-gray-400 border-gray-600 focus:border-blue-500 focus:ring-blue-500"
                        :class="{'border-red-600 focus:border-red-500 focus:ring-red-500' : errors.last_name}"
                    />
                    <div v-if="errors.last_name" class="text-red-600 text-sm mt-1 font-semibold">{{ errors.last_name }}</div>
                </div>

                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                    <input 
                        type="text" 
                        id="phone"
                        name="phone"
                        placeholder="01xxxxxxxxx"
                        :value="user.phone"
                        class="p-2n w-full block text-sm rounded-lg border text-white bg-gray-700 placeholder-gray-400 border-gray-600 focus:border-blue-500 focus:ring-blue-500"
                        :class="{'border-red-600 focus:border-red-500 focus:ring-red-500' : errors.phone}"
                    />
                    <div v-if="errors.phone" class="text-red-600 text-sm mt-1 font-semibold">{{ errors.phone }}</div>
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                    <input 
                        type="text" 
                        id="email"
                        name="email"
                        placeholder="example@gmail.com"
                        :value="user.email"
                        class="p-2n w-full block text-sm rounded-lg border text-white bg-gray-700 placeholder-gray-400 border-gray-600 focus:border-blue-500 focus:ring-blue-500"
                        :class="{'border-red-600 focus:border-red-500 focus:ring-red-500' : errors.email}"
                    />
                    <div v-if="errors.email" class="text-red-600 text-sm mt-1 font-semibold">{{ errors.email }}</div>
                </div>
            </div>

            <div class="mb-6">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <textarea 
                    id="address" 
                    name="address" 
                    rows="3"
                    placeholder="Your address ..."
                    :value="user.address"
                    class="p-2n w-full block text-sm rounded-lg border text-white bg-gray-700 placeholder-gray-400 border-gray-600 focus:border-blue-500 focus:ring-blue-500"
                    :class="{'border-red-600 focus:border-red-500 focus:ring-red-500' : errors.address}"
                ></textarea>
                <div v-if="errors.address" class="text-red-600 text-sm mt-1 font-semibold">{{ errors.address }}</div>
            </div>

            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input
                        type="password"
                        id="password" 
                        name="password"
                        placeholder="•••••••••"
                        class="p-2n w-full block text-sm rounded-lg border text-white bg-gray-700 placeholder-gray-400 border-gray-600 focus:border-blue-500 focus:ring-blue-500"
                        :class="{'border-red-600 focus:border-red-500 focus:ring-red-500' : errors.password}"
                    />
                    <div v-if="errors.password" class="text-red-600 text-sm mt-1 font-semibold">{{ errors.password }}</div>
                </div>

                <div>
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                    <input 
                        type="password" 
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="•••••••••"
                        class="p-2n w-full block text-sm rounded-lg border text-white bg-gray-700 placeholder-gray-400 border-gray-600 focus:border-blue-500 focus:ring-blue-500"
                    />
                </div>
            </div>

            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input
                        type="checkbox"
                        id="status"
                        name="status"
                        :checked="user.status"
                        class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                    />
                </div>
                <label for="status" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Active</label>
            </div>

            <button
                :disabled="processing"
                type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
                {{ processing ? 'Updating...' : 'Update User' }}
            </button>
        </Form>
    </div>
</template>