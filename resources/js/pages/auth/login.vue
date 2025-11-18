<template>
    <div class="mx-auto mt-9 max-w-sm">
        <div class="space-y-4 rounded border border-neutral-100 p-9 shadow">
            <div class="flex space-y-3 flex-col items-center">
                <img class="pointer-events-none user-select-none" :src="Logo" width="50%" />
                <div class="text-center">
                    <h2 class="text-2xl font-semibold">Login</h2>
                    <p class="text-xs text-neutral-600">Learning Management System SMK Pasundan 2 Bandung</p>
                </div>
            </div>
            <div>
                <FormLabel for="">Email</FormLabel>
                <Input type="email" placeholder="Masukan email cth:7365@psndn.sch.id" />
            </div>
            <div>
                <FormLabel for="">kata Sandi</FormLabel>
                <Input placeholder="Masukan kata sandi" type="password" />
            </div>
            <Button>Login</Button>
        </div>
    </div>
</template>
<script setup lang="ts">
import Button from '@/components/button.vue';
import FormLabel from '@/components/form-label.vue';
import Input from '@/components/input.vue';
import Logo from '../../logo/logo.png';
</script>
