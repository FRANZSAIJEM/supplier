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
                        <ClientCard v-for="client in clients.data" :key="client.id" :client="client"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 flex justify-between items-center">
    <div class="flex items-center space-x-2" style="transform: translateY(-20px) translateX(45px);">
        <span v-if="clients.prev_page_url">
            <a
                :href="clients.prev_page_url"
                @click.prevent="$inertia.visit(clients.prev_page_url)"
                class="text-sm font-medium text-gray-100 p-5 bg-green-900 rounded-md hover:bg-green-700 duration-100"
            >
                Previous
            </a>
        </span>

        <!-- Numbered Links Pagination -->
        <template v-if="clients.last_page > 1">
            <span v-for="page in clients.last_page" :key="page">
                <a
                    :href="'/clients?page=' + page"
                    @click.prevent="$inertia.visit('/clients?page=' + page)"
                    class="text-sm font-medium text-gray-100 p-5 bg-green-800 rounded-md hover:bg-green-700 duration-100 hover:transform hover:scale-110"
                    style="transition: width 0.2s ease-in-out;"
                >
                    <span class="hover-grow">{{ page }}</span>
                </a>
            </span>
        </template>


        <span v-if="clients.next_page_url">
            <a
                :href="clients.next_page_url"
                @click.prevent="$inertia.visit(clients.next_page_url)"
                class="text-sm font-medium text-gray-100 p-5 bg-green-900 rounded-md hover:bg-green-700 duration-100"
            >
                Next
            </a>
        </span>
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
