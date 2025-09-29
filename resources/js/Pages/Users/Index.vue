<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import AppLayout from '../../Layouts/App.vue';

defineOptions({layout: AppLayout})

defineProps({
    users: Array
})

const userDelete = (id) => {
    router.delete(route('users.destroy', id), {
        onBefore: () => confirm('Are you sure you want to delete this user?'),
    })
}
</script>

<template>
    <Head>
        <title>List</title>
        <meta head-key="description" name="description" content="This is user list page">
    </Head>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-7xl mx-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-white">User List</h2>
                    <Link 
                        :href="route('users.create')"
                        class="py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                    >
                        Add New
                    </Link>
                </div>
            </caption>

            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Eamil</th>
                    <th scope="col" class="px-6 py-3">Phone</th>
                    <th scope="col" class="px-6 py-3">Address</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(user,index) in users" :key="user.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="px-6 py-4">{{ index + 1 }}</td>
                    <td class="px-6 py-4 font-semibold">{{ user.full_name }}</td>
                    <td class="px-6 py-4">{{ user.email }}</td>
                    <td class="px-6 py-4">{{ user.phone }}</td>
                    <td class="px-6 py-4">{{ user.address }}</td>
                    <td class="px-6 py-4">
                        <span
                            v-if="user.status"
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-200 text-green-800"
                        >
                            Active
                        </span>
                        <span
                            v-else
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-200 text-red-800"
                        >
                            Inactive
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <Link :href="route('users.edit', user.id)" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</Link>
                        <button @click="userDelete(user.id)" type="button" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>