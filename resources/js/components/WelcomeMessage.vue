<template>
    <div class="mt-3">
        <h1 class="text-2xl">Selamat datang, {{ auth.user.name }}</h1>
        <span class="mt-1.5 block rounded border-neutral-100 p-1 text-xs">
            <div v-if="!quote?.error" class="italic">
                " {{ quote?.quote }}" -> <b>{{ quote?.author }}</b>
            </div>
            <div v-else>
                {{ quote?.error }}
            </div>
        </span>
    </div>
</template>
<script setup lang="ts">
import { useRandomQuote } from '@/composables/useRandomQuote';
import { usePage } from '@inertiajs/vue3';
const { quote } = useRandomQuote();
const { auth } = usePage().props;
</script>
