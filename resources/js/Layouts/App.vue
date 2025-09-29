<script setup>
import { Head } from '@inertiajs/vue3';
import AppHeader from '../Components/AppHeader.vue';
import AppSidebar from '../Components/AppSidebar.vue';
import AppFooter from '../Components/AppFooter.vue';
</script>

<template>
    <Head>
        <title>My App</title>
        <meta head-key="description" name="description" content="This is the default description" />
    </Head>

    <div class="flex flex-col min-h-screen bg-gray-900">
        <AppHeader />

        <AppSidebar />

        <main class="flex-1 p-4 sm:ml-64">
            <div class="mt-14">
                <article>
                    <slot />
                </article>
            </div>
        </main>

        <AppFooter />
    </div>
</template>