<script setup lang="ts">
import Button from '@/components/button.vue';
</script>

<template>
    <div class="container mx-auto px-3">
        <div class="my-4 mb-6">
            <span class="text-2xl font-semibold">Materi</span>
            <p class="text-xs">Halaman ini menyajikan materi pada masing masing mata pelajaran</p>
        </div>
        <div class="mb-2 rounded-lg bg-card-bg" v-for="i in 2">
            <div class="p-4">
                <div>
                    <h1 class="text-lg font-semibold text-neutral-700">Administrasi Infrastruktur Jaringan (AIJ)</h1>
                    <span class="text-sm text-neutral-600">Dr. Ade Kurniawan,M.Kom</span>
                </div>
                <Button class="mt-4 mb-2 bg-primary2 text-black">Materi</Button>
            </div>
        </div>
    </div>
</template>
