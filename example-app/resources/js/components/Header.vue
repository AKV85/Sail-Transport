<template>
    <header>
      <nav>
        <Link href="/">Home</Link>
        <Link href="/manufacturers">Manufacturers</Link>
        <Link href="/carModels">Car Models</Link>
        <Link href="/transports">Transports</Link>
      </nav>
    </header>
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/vue3';
  </script>
  
  <style scoped>
  header {
    background-color: #4caf50;
    padding: 1rem;
  }
  
  nav {
    display: flex;
    justify-content: space-around;
    align-items: center;
  }
  
  nav a {
    color: white;
    text-decoration: none;
    padding: 0.5rem 1rem;
  }
  
  nav a:hover {
    background-color: #41bd45;
  }
  </style>
  