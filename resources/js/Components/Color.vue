<template>
   
  </template>

  <script setup>
  import { ref, provide } from 'vue';

  const selectedColor = ref(null);

  const updateBackgroundColor = () => {
    provide('selectedColor', selectedColor.value);
  };
  </script>

  <style scoped>
  /* Add your component-specific styles here */
  </style>
