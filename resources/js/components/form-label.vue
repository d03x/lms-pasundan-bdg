<script setup lang="ts">
import { cn } from '@/lib/utils';

</script>

<template>
    <label :class="cn('text-[13px] block mb-1.5  capitalize')""><slot/></label>
</template>