<script setup>
import { useForm, Link } from '@inertiajs/vue3'
import Header from "@/components/Header.vue";

let props = defineProps({
    transport: Object
})

const form = useForm({
    car_model_id: props.transport.car_model_id,
    manufacturer_name: props.transport.car_model.manufacturer.name || '',
    car_model: props.transport.car_model.name,
    car_number: props.transport.car_number,
    fuel_tank_capacity: props.transport.fuel_tank_capacity,
    average_fuel_consumption: props.transport.average_fuel_consumption,
});
</script>

<template>
    <main>
        <Header />
        <div class="edit__transport">
            <pre>{{ transport }}</pre>
            <form @submit.prevent="form.put('/transports/' + (transport.id))">
                <div>
                    <div>
                        <label for="car_model_id">Car Model id:</label>
                        <input type='number' id="car_model_id" v-model="form.car_model_id" />
                        <div v-if="form.errors.car_model_id">{{ form.errors.car_model_id }}</div>
                    </div>
                    <div>
                        <label for="manufacturer_name">Car name:</label>
                        <input type="text" id="manufacturer_name" v-model="form.manufacturer_name" />
                        <div v-if="form.errors.manufacturer_name">{{ form.errors.manufacturer_name }}</div>
                    </div>
                    <div>
                        <label for="car_model">Car model:</label>
                        <input type="text" id="car_model" v-model="form.car_model" />
                        <div v-if="form.errors.car_model">{{ form.errors.car_model }}</div>
                    </div>
                    <div>
                        <label for="car_number">Car number:</label>
                        <input id="car_number" v-model="form.car_number" />
                        <div v-if="form.errors.car_number">{{ form.errors.car_number }}</div>
                    </div>
                    <div>
                        <label for="fuel_tank_capacity">Fuel tank capacity(l):</label>
                        <input id="fuel_tank_capacity" v-model="form.fuel_tank_capacity" />
                        <div v-if="form.errors.fuel_tank_capacity">{{ form.errors.fuel_tank_capacity }}</div>
                    </div>
                    <div>
                        <label for="average_fuel_consumption">Average fuel sonsumption(l/100km):</label>
                        <input id="average_fuel_consumption" v-model="form.average_fuel_consumption" />
                        <div v-if="form.errors.average_fuel_consumption">{{ form.errors.average_fuel_consumption }}</div>
                    </div>
                    <button type="submit">Update</button>
                    <Link :href="'/transports'" method="get" as="button" type="button">
                    Back
                    </Link>
                </div>
            </form>
        </div>
    </main>
</template>
