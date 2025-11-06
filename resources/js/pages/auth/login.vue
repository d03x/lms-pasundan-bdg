<template>
    <div class="mx-auto mt-24 max-w-sm">
        <div class="space-y-4 rounded border border-neutral-100 p-9 shadow">
            <div>
                <FormLabel for="">Email</FormLabel>
                <Input state="invalid" type="email" state-message="Login gagal email salah" placeholder="Ketikan nama" />
            </div>
            <div>
                <FormLabel for="">kata Sandi</FormLabel>
                <Input type="password" />
            </div>
            <button class="mt-2 w-full cursor-pointer rounded bg-blue-500 px-3 py-3 text-xs font-semibold text-white">Login</button>
        </div>
    </div>
</template>
<script setup lang="ts">
import FormLabel from '@/components/form-label.vue';
import Input from '@/components/input.vue';
</script>
