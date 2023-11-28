<!-- <template>
    <div>
        <h1>Manufacturers</h1>
        <ul>
            <li v-for="manufacturer in manufacturers" :key="manufacturer.id">
                <Link :href="'/manufacturers/' + (manufacturer.id || '')">
                {{ manufacturer.name }}
                </Link>
                <button @click="editManufacturer(manufacturer.id)">Edit</button>
                <button @click="deleteManufacturer(manufacturer.id)">Delete</button>
            </li>
        </ul>
        <button @click="createManufacturer">Create </button>
    </div>
</template> -->
  
<template>
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
            <Link :href="'/manufacturers/' + (manufacturer.id || '')+ '/edit'" method="get" as="button" type="button">
            Edit
            </Link>
            <Link :href="'/manufacturers/' + (manufacturer.id)" method="delete" as="button" type="button">
            Delete
            </Link>

        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    manufacturers: Array
});
</script>