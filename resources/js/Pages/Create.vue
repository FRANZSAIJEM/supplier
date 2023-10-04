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
            <button class="bg-slate-900">hahah</button>
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
