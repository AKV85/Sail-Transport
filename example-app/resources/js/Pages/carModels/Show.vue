<template>
    <main>
        <Header />
        <div class="carModel__content">
            <h1>{{ carModel.manufacturer.name }}</h1>
            <h1>{{ carModel.name }}</h1>
            <p><b>Created at: </b>{{ carModel.created_at }}</p>
            <p><b>Updated at: </b>{{ carModel.updated_at }}</p>
            <p><b>Deleted at: </b>{{ carModel.deleted_at }}</p>

            <Link :href="'/carModels'" method="get" as="button" type="button">
            Back
            </Link>
            <Link :href="'/carModels/' + (carModel.id || '') + '/edit'" method="get" as="button" type="button">
            Edit
            </Link>
            <Link :href="'/carModels/' + (carModel.id)" method="delete" as="button" type="button">
            Delete
            </Link>
        </div>
    </main>
</template>
  
<script setup>
import { Link } from '@inertiajs/vue3';
import Header from "@/components/Header.vue";

defineProps({
    carModel: Object
})
</script>
  