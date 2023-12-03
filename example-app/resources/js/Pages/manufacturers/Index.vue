<template>
    <main>
        <Header />
        <div class="container mx-auto pt-5">

            <nav>
                <Link href="/manufacturers/create">Create</Link>
            </nav>

            <div class="manufacturer__block" v-for="manufacturer in manufacturers" :key="manufacturer.id">
                <h2>{{ manufacturer.id }}</h2>
                <h2>{{ manufacturer.name }}</h2>
                <Link :href="'/manufacturers/' + (manufacturer.id || '')" method="get" as="button" type="button">
                Show more
                </Link>
                <Link :href="'/manufacturers/' + (manufacturer.id || '') + '/edit'" method="get" as="button" type="button">
                Edit
                </Link>
                <Link :href="'/manufacturers/' + (manufacturer.id)" method="delete" as="button" type="button">
                Delete
                </Link>
            </div>
        </div>
    </main>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import Header from "@/components/Header.vue";

defineProps({
    manufacturers: Array
});
</script>