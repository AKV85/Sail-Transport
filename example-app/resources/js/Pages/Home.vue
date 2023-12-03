<script setup>
import DataTable from "@/components/DataTable.vue";
import { onMounted, ref } from "vue";
import '@/css/home.css';
import Header from "@/components/Header.vue";

const transports = ref([]);

onMounted(async () => {
  try {
    const response = await fetch('http://localhost/api/transports');
    const data = await response.json();
    transports.value = data.transports || [];
  } catch (error) {
    console.error('Error fetching data:', error);
  }
});
</script>

<template>
  <main>
    <Header />
  <div>
     <!-- class="p-8 bg-gray-100 min-h-screen"> -->
    <DataTable :transports="transports" />
  </div>
  </main>
</template>