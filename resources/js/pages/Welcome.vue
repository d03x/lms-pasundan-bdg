<script setup lang="ts">
import WelcomeMessage from '@/components/WelcomeMessage.vue';
import Pengumuman from '@/features/Pengumuman.vue';
</script>

<template>
    <div class="container mx-auto px-1 lg:px-2">
        <WelcomeMessage />
        <hr class="my-5 text-neutral-300" />
        <div class="flex gap-4">
            <Pengumuman class="flex-1" />
        </div>
    </div>
</template>
