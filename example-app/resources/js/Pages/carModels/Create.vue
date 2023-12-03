<script setup>
import { useForm, Link } from '@inertiajs/vue3'
import Header from "@/components/Header.vue";

const form = useForm({
    name: null,
    manufacturer_id: null

})

</script>

<template>
    <main>
        <Header />

        <div class="create__carModel">
            <form @submit.prevent="form.post('/carModels')">
                <div>
                    <label for="manufacturer_id">Brand id:</label>
                    <input type='number' id="manufacturer_id" v-model="form.manufacturer_id" />
                    <div v-if="form.errors.manufacturer_id">{{ form.errors.manufacturer_id }}</div>
                </div>
                <div>
                    <label for="name">Model name:</label>
                    <input type='text' id="name" v-model="form.name" />
                    <div v-if="form.errors.name">{{ form.errors.name }}</div>

                    <button type="submit">Create</button>
                    <Link :href="'/carModels'" method="get" as="button" type="button">
                    Back
                    </Link>
                </div>
            </form>
        </div>
    </main>
</template>
