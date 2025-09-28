<script setup>
import { Head, Link, Form } from '@inertiajs/vue3';
import AppLayout from '../../Layouts/App.vue';

defineOptions({layout: AppLayout})

defineProps({
    customer: Object
})
</script>

<template>
    <Head>
        <title>Edit</title>
        <meta head-key="description" name="description" content="This is customer edit page">
    </Head>

    <section class="mx-auto max-w-screen-xl px-4 py-16">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-8">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Edit Customer</h2>
                <Link 
                    :href="route('customers.index')"
                    class="rounded-md bg-blue-600 px-3 py-2 text-sm text-white hover:bg-blue-700"
                >
                    ← Back
                </Link>
            </div>

            <Form :action="route('customers.update', customer.id)" method="put" #default="{errors, processing}" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                        <input
                            type="text"
                            id="first_name"
                            name="first_name"
                            :value="customer.first_name"
                            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500"
                            :class="{'border-red-500 focus:border-red-500 focus:ring-red-500' : errors.first_name}"
                        >
                        <div v-if="errors.first_name" class="text-red-600 text-xs italic">{{ errors.first_name }}</div>
                    </div>

                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input 
                            type="text" 
                            id="last_name" 
                            name="last_name"
                            :value="customer.last_name"
                            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500"
                            :class="{'border-red-500 focus:border-red-500 focus:ring-red-500' : errors.last_name}"
                        >
                        <div v-if="errors.last_name" class="text-red-600 text-xs italic">{{ errors.last_name }}</div>
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email"
                        :value="customer.email"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500"
                        :class="{'border-red-500 focus:border-red-500 focus:ring-red-500' : errors.email}"
                    >
                    <div v-if="errors.email" class="text-red-600 text-xs italic">{{ errors.email }}</div>
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    <input 
                        type="tel" 
                        id="phone" 
                        name="phone"
                        :value="customer.phone"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500"
                        :class="{'border-red-500 focus:border-red-500 focus:ring-red-500' : errors.phone}"
                    >
                    <div v-if="errors.phone" class="text-red-600 text-xs italic">{{ errors.phone }}</div>
                </div>

                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea 
                        id="address" 
                        name="address" 
                        rows="3"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500"
                        :class="{'border-red-500 focus:border-red-500 focus:ring-red-500' : errors.address}"
                    >{{ customer.address }}</textarea>
                    <div v-if="errors.address" class="text-red-600 text-xs italic">{{ errors.address }}</div>
                </div>

                <div class="flex items-center">
                    <input
                        id="status"
                        name="status"
                        :checked="customer.status"
                        type="checkbox"
                        class="h-4 w-4 text-green-600 border-gray-300 rounded focus:ring-green-500"
                    >
                    <label for="status" class="ml-2 text-gray-700">Active</label>
                </div>

                <button
                    :disabled="processing"
                    type="submit"
                    class="w-full bg-blue-600 text-white font-medium py-3 px-6 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-1 transition"
                >
                    {{ processing ? 'Updating...' : 'Update Customer' }}
                </button>
            </Form>
        </div>
    </section>
</template>