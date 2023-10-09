<script setup>
import { inject } from 'vue';
import { Link } from '@inertiajs/vue3';


defineProps({
    client: Object
})

const Color = inject('color')
</script>

<template>
        <div style="display: inline-flex; flex-wrap: wrap;">
            <div class="bg-slate-100 text-dark m-5 p-5 shadow-md rounded-lg" style="width: 350px;">
                <div :class="{
                    'bg-red-600' : Color == 'red',
                    'bg-blue-600' : Color == 'blue',
                    'bg-green-600' : Color == 'green',
                }"  class="rounded-2xl shadow-2xl mb-5" style="display: grid; place-content: center;">
                <img width="170" src="https://lokeman.com/wp-content/uploads/2021/09/Vendor-google.png" alt="">
                </div>

                <b>Last Name: </b> <br>
                <b>First Name: </b> <br>
                <b>Address: </b> <br>
                <b>Phone: </b><br>
                <b>Level: </b><br> <br>
                <Link
                :href="route('suppliers.edit')" :active="route().current('suppliers.edit')"
                :class="{
                    'bg-red-600' : Color == 'red',
                    'bg-blue-600' : Color == 'blue',
                    'bg-green-600' : Color == 'green',
                }" class="me-4 shadow-md text-white border-solid rounded-md p-3">Edit</Link>

                <Link
                :href="route('suppliers.view')" :active="route().current('suppliers.view')"
                :class="{
                    'bg-red-600' : Color == 'red',
                    'bg-blue-600' : Color == 'blue',
                    'bg-green-600' : Color == 'green',
                }" class="me-4 shadow-md text-white border-solid rounded-md p-3">View</Link>

                <Link
                :href="route('suppliers.delete')" :active="route().current('suppliers.delete')"
                :class="{
                    'bg-red-600' : Color == 'red',
                    'bg-blue-600' : Color == 'blue',
                    'bg-green-600' : Color == 'green',
                }" class="me-4 shadow-md text-white border-solid rounded-md p-3">Delete</Link>
            </div>
        </div>
</template>
