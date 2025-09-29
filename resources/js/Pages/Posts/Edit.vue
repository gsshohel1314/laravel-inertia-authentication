<script setup>
import { Head, Link, Form } from '@inertiajs/vue3';
import AppLayout from '../../Layouts/App.vue';

defineOptions({layout: AppLayout})

defineProps({
    post: Object
})
</script>

<template>
    <Head>
        <title>Edit</title>
        <meta head-key="description" name="description" content="This is post edit page">
    </Head>

    <div class="p-8 rounded-lg max-w-7xl mx-auto bg-gray-800">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-white">Edit Post</h2>
            <Link 
                :href="route('posts.index')"
                class="py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
            >
                ← Back
            </Link>
        </div>

        <Form :action="route('posts.update', post.id)" method="put" #default="{errors, processing}">
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input
                    type="text"
                    id="title" 
                    name="title"
                    placeholder="Your post title"
                    :value="post.title"
                    class="p-2n w-full block text-sm rounded-lg border text-white bg-gray-700 placeholder-gray-400 border-gray-600 focus:border-blue-500 focus:ring-blue-500"
                    :class="{'border-red-600 focus:border-red-500 focus:ring-red-500' : errors.title}"
                />
                <div v-if="errors.title" class="text-red-600 text-sm mt-1 font-semibold">{{ errors.title }}</div>
            </div>

            <div class="mb-6">
                <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                <textarea 
                    id="body" 
                    name="body" 
                    rows="5"
                    placeholder="Your post body ..."
                    class="p-2n w-full block text-sm rounded-lg border text-white bg-gray-700 placeholder-gray-400 border-gray-600 focus:border-blue-500 focus:ring-blue-500"
                    :class="{'border-red-600 focus:border-red-500 focus:ring-red-500' : errors.body}"
                >{{ post.body }}</textarea>
                <div v-if="errors.body" class="text-red-600 text-sm mt-1 font-semibold">{{ errors.body }}</div>
            </div>

            <div class="mb-6">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                <div class="flex">
                    <div class="flex items-center me-4">
                        <input :checked="post.status === 'draft'" id="draft" type="radio" value="draft" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="draft" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Draft</label>
                    </div>
                    <div class="flex items-center me-4">
                        <input :checked="post.status === 'published'" id="published" type="radio" value="published" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="published" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Published</label>
                    </div>
                    <div class="flex items-center me-4">
                        <input :checked="post.status === 'archived'" id="archived" type="radio" value="archived" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="archived" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Archived</label>
                    </div>
                </div>
            </div>

            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input
                        type="checkbox"
                        id="is_featured"
                        name="is_featured"
                        :checked="post.is_featured"
                        class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                    />
                </div>
                <label for="is_featured" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Is Featured</label>
            </div>

            <button
                :disabled="processing"
                type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
                {{ processing ? 'Updating...' : 'Update Post' }}
            </button>
        </Form>
    </div>
</template>