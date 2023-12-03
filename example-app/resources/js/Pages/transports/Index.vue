<template>
    <main>
        <Header />
        <div class="container mx-auto pt-5">
            <nav class="flex justify-between items-center mb-4">
                <div>
                    <Link class="navLink" href="/transports/create">Create</Link>
                </div>
            </nav>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Manufacturer</th>
                        <th>Car Model</th>
                        <th>Car Number</th>
                        <th>Fuel Tank Capacity(l)</th>
                        <th>Average Fuel Consumption(l/100km)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="transport in transports" :key="transport.id">
                        <td>{{ transport.id }}</td>
                        <td>{{ transport.car_model.manufacturer.name }}</td>
                        <td>{{ transport.car_model.name }}</td>
                        <td>{{ transport.car_number }}</td>
                        <td>{{ transport.fuel_tank_capacity }}</td>
                        <td>{{ transport.average_fuel_consumption }}</td>
                        <td>
                            <Link class="button" :href="'/transports/' + (transport.id || '')" method="get" as="button"
                                type="button">Show more</Link>
                            <Link class="button" :href="'/transports/' + (transport.id || '') + '/edit'" method="get"
                                as="button" type="button">Edit</Link>
                            <Link class="button delete-button" :href="'/transports/' + (transport.id)" method="delete"
                                as="button" type="button">Delete</Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</template>
  
<script setup>
import { Link, router } from '@inertiajs/vue3';
import { ref, onMounted, nextTick, computed } from 'vue';
import '@/css/app.css';
import Header from "@/components/Header.vue";

defineProps({
    transports: Array,
});

onMounted(() => {
});

</script>