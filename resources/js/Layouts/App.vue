<script setup>
import { Head } from '@inertiajs/vue3';
import AppHeader from '../Components/AppHeader.vue';
import AppFooter from '../Components/AppFooter.vue';
</script>

<template>
    <Head>
        <title>My App</title>
        <meta head-key="description" name="description" content="This is the default description" />
    </Head>

    <div class="flex flex-col min-h-screen bg-gray-50 text-gray-900">
        <AppHeader />

        <main class="flex-1">
            <article>
                <slot />
            </article>
        </main>

        <AppFooter />
    </div>
</template>