<template>
    <button :class="cn(classsess, props.class)">
        <slot />
    </button>
</template>
<script setup lang="ts">
import { cn } from '@/lib/utils';
import { computed } from 'vue';
const props = defineProps<{
    class?: string;
}>();
const classsess = computed(() => {
    return `mt-2 w-full disabled:bg-neutral-500  cursor-pointer rounded-input bg-primary px-3 py-3 text-xs font-semibold text-white`;
});
</script>
