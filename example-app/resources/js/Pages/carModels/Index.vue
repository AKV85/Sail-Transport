<template>
    <main>
        <Header />
        <div class="container mx-auto pt-5">

            <nav>
                <Link href="/carModels/create">Create</Link>
            </nav>

            <div class="carModel__block" v-for="carModel in carModels" :key="carModel.id">
                <h2>{{ carModel.id }}</h2>
                <h2>{{ carModel.manufacturer.name }}</h2>
                <h2>{{ carModel.name }}</h2>
                <Link :href="'/carModels/' + (carModel.id || '')" method="get" as="button" type="button">
                Show more
                </Link>
                <Link :href="'/carModels/' + (carModel.id || '') + '/edit'" method="get" as="button" type="button">
                Edit
                </Link>
                <Link :href="'/carModels/' + (carModel.id)" method="delete" as="button" type="button">
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
    carModels: Array
});
</script>