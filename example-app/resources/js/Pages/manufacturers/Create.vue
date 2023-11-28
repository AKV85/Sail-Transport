<script setup>
import { useForm, Link } from '@inertiajs/vue3'

const form = useForm({
    name: null,
})

</script>

<template>
    <div class="create__manufacturer">
        <form @submit.prevent="form.post('/manufacturers')">
            <div>
                <label for="name">Brand name:</label>
                <input type='name' id="name" v-model="form.name" />
                <div v-if="form.errors.name">{{ form.errors.name }}</div>

                <button type="submit">Create</button>
                <Link :href="'/manufacturers'" method="get" as="button" type="button">
                Back
                </Link>
            </div>
        </form>
    </div>
</template>
