<template>
    <div class="max-w-xl lg:max-w-full border-none bg-white lg:border-x min-h-screen lg:border-neutral-300 mx-auto">
        <Header/>
        <slot/>
    </div>
</template>
<script setup lang="ts">
import Header from "@/components/Header.vue";
import "vue3-toastify/dist/index.css";

</script>