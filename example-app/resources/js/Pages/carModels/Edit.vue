<script setup>
import { useForm, Link } from '@inertiajs/vue3'
import Header from "@/components/Header.vue";

let props = defineProps({
    carModel: Object
})

const form = useForm({
    name: props.carModel.name,
    manufacturer_id: props.carModel.manufacturer_id
});
</script>

<template>
    <main>
        <Header />
        <div class="edit__carModel">
            <form @submit.prevent="form.put('/carModels/' + (carModel.id))">
                <div>
                    <label for="manufacturer_id">Brand id:</label>
                    <input type='numeric' id="manufacturer_id" v-model="form.manufacturer_id" />
                    <div v-if="form.errors.manufacturer_id">{{ form.errors.manufacturer_id }}</div>
                    <label for="name">Model name:</label>
                    <input type='text' id="name" v-model="form.name" />
                    <div v-if="form.errors.name">{{ form.errors.name }}</div>

                    <button type="submit">Update</button>
                    <Link :href="'/carModels'" method="get" as="button" type="button">
                    Back
                    </Link>
                </div>
            </form>
        </div>
    </main>
</template>
