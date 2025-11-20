<template>
    <header class="lg:h-28 h-22 bg-primary">
        <div class="container lg:h-28 h-22 mx-auto flex px-3 items-center">
            <div class="flex items-center space-x-2 text-white">
                <img   class="lg:w-17 w-14 appearance-none aspect-square"  :src="Logo" alt=""></img>
                <div>
                    <h1 class="font-normal text-xs lg:text-sm">Learning Management System</h1>
                    <p class="font-bold text-xs lg:text-base">SMK PASUNDAN 2 BDG</p>
                </div>
            </div>
            <div class="ml-auto">
               <Menu color="white" width="32" height="32"/>
            </div>
        </div>
    </header>
  
</template>
<script setup lang="ts">
    import Logo from "@/logo/logo.png"
import Menu from "./logo/menu.vue";
</script>