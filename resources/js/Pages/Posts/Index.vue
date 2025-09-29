<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import AppLayout from '../../Layouts/App.vue';

defineOptions({layout: AppLayout})

defineProps({
    posts: Array
})

const postDelete = (id) => {
    router.delete(route('posts.destroy', id), {
        onBefore: () => confirm('Are you sure you want to delete this post?'),
    })
}
</script>

<template>
    <Head>
        <title>List</title>
        <meta head-key="description" name="description" content="This is post list page">
    </Head>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-7xl mx-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-white">Post List</h2>
                    <Link 
                        :href="route('posts.create')"
                        class="py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                    >
                        Add New
                    </Link>
                </div>
            </caption>

            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th scope="col" class="px-6 py-3">Author</th>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Featured</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(post,index) in posts" :key="post.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="px-6 py-4">{{ index + 1 }}</td>
                    <td class="px-6 py-4 font-semibold">{{ post.author.full_name }}</td>
                    <td class="px-6 py-4">{{ post.title }}</td>
                    <td class="px-6 py-4">
                        <span v-if="post.status == 'draft'" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-amber-200 text-amber-800">
                            Draft
                        </span>
                        <span v-else-if="post.status == 'published'" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-200 text-green-800">
                            Published
                        </span>
                        <span v-else class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-200 text-red-800">
                            Archived
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <span v-if="post.is_featured" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-200 text-green-800">
                            YES
                        </span>
                        <span v-else class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-200 text-red-800">
                            NO
                        </span>
                    </td>
                    <td class="px-6 py-4 space-x-2">
                        <Link :href="route('posts.edit', post.id)" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</Link>
                        <button @click="postDelete(post.id)" type="button" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>