<script setup lang="ts">
import Horn from '@/components/logo/horn.vue';
</script>

<template>
    <div class="rounded border border-neutral-100 bg-card-bg">
            <div class="p-2 lg:p-5 lg:py-3">
                <div class="flex items-center space-x-2 text-neutral-700">
                    <span><Horn /></span>
                    <h1 class="font-semibold">Pengumuman</h1>
                </div>
                <hr class="my-3 text-neutral-300" />
                <div v-for="i in 4" class="mb-2 cursor-pointer rounded-md border border-neutral-300 bg-neutral-200 p-2 pt-3">
                    <div>
                        <h2 class="text-[15px]">Surat Edaran Ujian Tengah Semester</h2>
                       <div class="my-1.5 flex items-center space-x-2 text-xs text-neutral-600">
                         <div>
                            <span class="mr-1 font-semibold">Posted By</span>
                            <span>Alfiansyah</span>
                        </div>
                        <div>
                            <span>29 Oktober 2025 18:00</span>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
</template>