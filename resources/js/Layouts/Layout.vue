<script setup>
    import MainNav from '@/Components/MainNav.vue'
    import { ref} from 'vue';
    import { Link } from '@inertiajs/vue3';

    import { onMounted, provide } from 'vue';

    const selectedColor = ref('green'); // Default background color

    provide('color', selectedColor)

    // console.log(selectedColor)



    let width = ref('w-[250px]')
    let hide = ref(false)

    function toggleWidth() {
        if(width.value == 'w-[250px]') {
            width.value = 'w-[100px]'
            hide.value = true
        }else {
            width.value = ['w-[250px]']
            hide.value = false
        }
    }
</script>

<template>

<div class="flex min-h-screen">
    <div id="sidebar" class="p-6 duration-500"
     :class="{
        'bg-red-600' : selectedColor == 'red',
        'bg-blue-600' : selectedColor == 'blue',
        'bg-green-600' : selectedColor == 'green',
     }"
     style="position: relative;">
        <button class="text-xl text-white" @click="toggleWidth" style="position: absolute; right: 10px; top:10px">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div id="branding" :hidden="hide">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/019/900/322/small/happy-young-cute-illustration-face-profile-png.png" alt="User Logo"
                class="w-[170px] h-[170px] mx-auto rounded-full object-cover">
            <h1 class="my-6 text-3xl text-center text-white">{{ $page.props.auth.user.name }}</h1>

        </div>



        <div class="mt-10">
            <MainNav :hidden="hide"></MainNav>
        </div>

        <div class="mb-4">
        <label for="colorSelect" class="block text-gray-100">Select a color:</label>
        <select id="colorSelect" v-model="selectedColor" class="w-full p-2 border rounded-md">
            <option value="red" class="py-2">Red</option>
            <option value="blue" class="py-2">Blue</option>
            <option value="green" class="py-2">Green</option>
        </select>
        </div>

    </div>
    <div id="container" class="flex-1">
        <slot />
    </div>
</div>

</template>
