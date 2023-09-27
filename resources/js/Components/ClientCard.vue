<script setup>
import { inject } from 'vue';

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
                <img width="170" src="https://static.vecteezy.com/system/resources/previews/022/665/468/non_2x/excited-3d-boy-jumping-on-white-transparent-background-free-png.png" alt="">
                </div>
                <b>Last Name: </b>{{ client.last_name }} <br>
                <b>First Name: </b>{{ client.first_name }} <br>
                <b>Address: </b>{{ client.address }} <br>
                <b>Phone: </b>{{ client.phone }} <br>
                <b>Level: </b>{{ client.level }} <br> <br>
                <button :class="{
                    'bg-red-600' : Color == 'red',
                    'bg-blue-600' : Color == 'blue',
                    'bg-green-600' : Color == 'green',
                }" class="border-2 border-gray-900 text-white border-solid rounded-md p-5">Click Me?</button>
            </div>
        </div>
</template>
