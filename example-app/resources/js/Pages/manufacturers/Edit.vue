<script setup>
import { useForm, Link } from '@inertiajs/vue3'
import Header from "@/components/Header.vue";

let props = defineProps({
    manufacturer: Object
})

const form = useForm({
    name: props.manufacturer.name,
});
</script>

<template>
    <main>
        <Header />
        <div class="create__manufacturer">
            <form @submit.prevent="form.put('/manufacturers/' + (manufacturer.id))">
                <div>
                    <label for="name">Brand name:</label>
                    <input type='name' id="name" v-model="form.name" />
                    <div v-if="form.errors.name">{{ form.errors.name }}</div>

                    <button type="submit">Update</button>
                    <Link :href="'/manufacturers'" method="get" as="button" type="button">
                    Back
                    </Link>
                </div>
            </form>
        </div>
    </main>
</template>
