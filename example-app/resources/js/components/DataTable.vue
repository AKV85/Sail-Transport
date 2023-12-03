<script setup>
import '@/css/app.css';
import SearchForm from '@/components/SearchForm.vue';
import FilterRadios from '@/components/FilterRadios.vue';
import { Link } from '@inertiajs/vue3';
import { computed, ref } from 'vue';


const searchFilter = ref('');
const radioFilter = ref('');

const props = defineProps({
    transports: {
        type: Array,
        required: true
    }
});

const filteredTransports = computed(() => {
    let transports = props.transports;
    switch (radioFilter.value) {
        case 'today':
            transports = transports.filter(transport => new Date(transport.created_at).getDate() === new Date().getDate());
            break;
        case 'deleted':

            transports = transports.filter(transport => transport.deleted_at !== null);
            break;
    }

    if (searchFilter.value !== '') {
        transports = transports.filter(transport =>
            transport.car_model.manufacturer.name.includes(searchFilter.value) ||
            transport.car_model.name.includes(searchFilter.value) ||
            transport.car_number.includes(searchFilter.value)
        );
    }
    return transports;
});

const handleSearch = (search) => {
    searchFilter.value = search;
};

const handleRadioFilter = (filter) => {
    radioFilter.value = filter;
}

function calculateProjectedDistance(fuelTankCapacity, averageFuelConsumption) {
  if (fuelTankCapacity === null || averageFuelConsumption === null) {
    return null;
  }

  const tankCapacity = parseFloat(fuelTankCapacity);
  const fuelConsumption = parseFloat(averageFuelConsumption);

  if (isNaN(tankCapacity) || isNaN(fuelConsumption)) {
    return null;
  }

  const projectedDistance = tankCapacity / (fuelConsumption / 100);

  return projectedDistance.toFixed(2);
}
</script>

<template>
    <div class="container mx-auto pt-5">
        <nav class="flex justify-between items-center mb-4">
            <div>
                <Link class="navLink" href="/transports/create">Create</Link>
            </div>
        </nav>
        <div class="flex items-center justify-between">
            <SearchForm @search="handleSearch" />
            <div class="flex items-center justify-end text-sm fint-semibold">
                <FilterRadios @filter="handleRadioFilter" />
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Manufacturer</th>
                    <th>Car Model</th>
                    <th>Car Number</th>
                    <th>Fuel Tank Capacity(l)</th>
                    <th>Average Fuel Consumption(l/100km)</th>
                    <th>Projected Distance(km)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="transport in filteredTransports" :key="transport.id">
                    <td>{{ transport.id }}</td>
                    <td>{{ transport.car_model.manufacturer.name }}</td>
                    <td>{{ transport.car_model.name }}</td>
                    <td>{{ transport.car_number }}</td>
                    <td>{{ transport.fuel_tank_capacity }}</td>
                    <td>{{ transport.average_fuel_consumption }}</td>
                    <td>{{ calculateProjectedDistance(transport.fuel_tank_capacity, transport.average_fuel_consumption) }}</td>
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
</template>