<script setup>
import Layout from '@/Layouts/Layout.vue';
import ClientCard from '@/Components/ClientCard.vue';
import { Head } from '@inertiajs/vue3';
// import { ref, inject } from 'vue';

// console.log(Color)
</script>


<template>
    <Head title="Clients" />

    <Layout>
        <div class="">
            <div class="">
                <div class="">
                    <!-- Card here -->
                    <div class="p-6 text-gray-900">
                        <h1 class="shadow-md rounded-sm p-5"><i class="fa-solid fa-cart-plus"></i> Create Supplier</h1>
                    </div>
                </div>
            </div>
        </div>

    </Layout>
</template>

<script>
export default {
    props: {
        clients: Object, // Define the clients prop type as an object
    },
};
</script>
