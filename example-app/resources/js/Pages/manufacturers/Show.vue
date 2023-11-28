<template>
    <div class="manufacturer__content">
        <h1>{{ manufacturer.name }}</h1>
        <p><b>Created at: </b>{{ manufacturer.created_at }}</p>
        <p><b>Updated at: </b>{{ manufacturer.updated_at }}</p>
        <p><b>Deleted at: </b>{{ manufacturer.deleted_at }}</p>

        <Link :href="'/manufacturers'" method="get" as="button" type="button">
        Back
        </Link>
        <Link :href="'/manufacturers/' + (manufacturer.id || '') + '/edit'" method="get" as="button" type="button">
        Edit
        </Link>
        <Link :href="'/manufacturers/' + (manufacturer.id)" method="delete" as="button" type="button">
        Delete
        </Link>
    </div>
</template>
  
<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    manufacturer: Object
})
</script>
  