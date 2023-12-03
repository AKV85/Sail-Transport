<template>
    <main>
        <Header />
        <div class="transport__content">
            <h2>{{ transport.id }}</h2>
            <h2>{{ transport.car_model.manufacturer.name }}</h2>
            <h2>{{ transport.car_model.name }}</h2>
            <h2>{{ transport.car_number }}</h2>
            <h2>{{ transport.fuel_tank_capacity }}</h2>
            <h2>{{ transport.average_fuel_consumption }}</h2>
            <p><b>Created at: </b>{{ transport.created_at }}</p>
            <p><b>Updated at: </b>{{ transport.updated_at }}</p>
            <p><b>Deleted at: </b>{{ transport.deleted_at }}</p>

            <Link :href="'/transports'" method="get" as="button" type="button">
            Back
            </Link>
            <Link :href="'/transports/' + (transport.id || '') + '/edit'" method="get" as="button" type="button">
            Edit
            </Link>
            <Link :href="'/transports/' + (transport.id)" method="delete" as="button" type="button">
            Delete
            </Link>
        </div>
    </main>
</template>
  
<script setup>
import { Link } from '@inertiajs/vue3';
import Header from "@/components/Header.vue";

defineProps({
    transport: Object
})
</script>
  