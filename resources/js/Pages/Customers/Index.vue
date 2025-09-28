<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import AppLayout from '../../Layouts/App.vue';

defineOptions({layout: AppLayout})

defineProps({
    customers: Array
})

const customerDelete = (id) => {
    router.delete(route('customers.destroy', id), {
        onBefore: () => confirm('Are you sure you want to delete this customer?'),
    })
}
</script>

<template>
    <Head>
        <title>List</title>
        <meta head-key="description" name="description" content="This is customer list page">
    </Head>

    <section class="mx-auto max-w-screen-xl px-4 py-16">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-8">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Customers List</h2>
                <Link 
                    :href="route('customers.create')"
                    class="rounded-md bg-blue-600 px-3 py-2 text-sm text-white hover:bg-blue-700"
                >
                    Add New
                </Link>
            </div>
    
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-700">
                    <thead class=" bg-gray-100">
                        <tr>
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">Name</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Phone</th>
                            <th class="px-6 py-3">Address</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr v-for="(customer,index) in customers" :key="customer.id" class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ index + 1 }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900">{{ customer.full_name }}</td>
                            <td class="px-6 py-4">{{ customer.email }}</td>
                            <td class="px-6 py-4">{{ customer.phone }}</td>
                            <td class="px-6 py-4">{{ customer.address }}</td>
                            <td class="px-6 py-4">
                                <span
                                    v-if="customer.status"
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"
                                >
                                    Active
                                </span>
                                <span
                                    v-else
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"
                                >
                                    Inactive
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <Link :href="route('customers.edit', customer.id)" class="font-medium text-blue-600 hover:underline">Edit</Link>
                                <button @click="customerDelete(customer.id)" type="button" class="font-medium text-red-600 hover:underline">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</template>