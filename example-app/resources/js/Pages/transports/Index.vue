<template>
    <div class="container mx-auto pt-5">

        <nav>
            <Link href="/transports/create">Create</Link>
        </nav>

        <div class="transport__block" v-for="transport in transports" :key="transport.id">
            <h2>{{ transport.id }}</h2>
            <h2>{{ transport.car_model.manufacturer.name }}</h2>
            <h2>{{ transport.car_model.name }}</h2>
            <h2>{{ transport.car_number }}</h2>
            <h2>{{ transport.fuel_tank_capacity }}</h2>
            <h2>{{ transport.average_fuel_consumption }}</h2>
            <h2>{{ transport.projected_distance }}</h2>

            <Link :href="'/transports/' + (transport.id || '')" method="get" as="button" type="button">
            Show more
            </Link>
            <Link :href="'/transports/' + (transport.id || '') + '/edit'" method="get" as="button" type="button">
            Edit
            </Link>
            <Link :href="'/transports/' + (transport.id)" method="delete" as="button" type="button">
            Delete
            </Link>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    transports: Array
});
</script>