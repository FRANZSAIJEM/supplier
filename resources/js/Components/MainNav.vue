<script setup>
import { Link } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import { ref, inject } from "vue";


const Color = inject('color')

const {hidden} = defineProps (['hidden'])
</script>

<template>

    <div class="main-nav" style="text-align: start;">
        <Link :href="route('dashboard')" :active="route().current('dashboard')">
            <i :class="{
        'bg-red-600' : Color == 'red',
        'bg-blue-600' : Color == 'blue',
        'bg-green-600' : Color == 'green',
     }" style="width: 45px; margin-left: -13px; text-align: center; box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.159); padding: 10px; border-radius: 5px;" class="fa-solid fa-house-chimney"></i> <span :hidden="hidden">Dashboard</span>
        </Link>

        <Link :href="route('clients')" :active="route().current('clients')">
            <i :class="{
        'bg-red-600' : Color == 'red',
        'bg-blue-600' : Color == 'blue',
        'bg-green-600' : Color == 'green',
     }" style="width: 45px; margin-left: -13px; text-align: center; box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.159); padding: 10px; border-radius: 5px;" class="fa-solid fa-users"></i> <span :hidden="hidden">Clients</span>
        </Link>

        <Link :href="route('clients')" :active="route().current('clients')">
            <i :class="{
        'bg-red-600' : Color == 'red',
        'bg-blue-600' : Color == 'blue',
        'bg-green-600' : Color == 'green',
     }" style="width: 45px; margin-left: -13px; text-align: center; box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.159); padding: 10px; border-radius: 5px;" class="fa-solid fa-boxes-packing"></i> <span :hidden="hidden">Supplier</span>
        </Link>

        <Link :href="route('profile.edit')" :active="route().current('clients')">
            <i :class="{
        'bg-red-600' : Color == 'red',
        'bg-blue-600' : Color == 'blue',
        'bg-green-600' : Color == 'green',
     }" style="width: 45px; margin-left: -13px; text-align: center; box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.159); padding: 10px; border-radius: 5px;" class="fa-solid fa-user"></i> <span :hidden="hidden">Profile</span>
        </Link>
        <Link :href="route('logout')" method="POST">
            <i :class="{
        'bg-red-600' : Color == 'red',
        'bg-blue-600' : Color == 'blue',
        'bg-green-600' : Color == 'green',
     }" style="width: 45px; margin-left: -13px; text-align: center; box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.159); padding: 10px; border-radius: 5px;" class="fa-solid fa-right-from-bracket"></i> <span :hidden="hidden">Logout</span>
        </Link>
        <div>

        </div>

    </div>

</template>
<style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown-item {
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
</style>
