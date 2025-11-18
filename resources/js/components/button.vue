<template>
    <button :class="classsess">
        <slot/>
    </button>
</template>
<script setup lang="ts">
import { computed } from 'vue';

const classsess = computed(()=>{
    return `mt-2 w-full cursor-pointer rounded-input bg-primary px-3 py-3 text-xs font-semibold text-white`;
})
</script>