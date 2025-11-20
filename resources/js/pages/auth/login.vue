<template>
    <div class="flex min-h-screen flex-col items-center bg-white pt-20 font-sans text-slate-800">
        <div class="mb-8 flex items-center gap-4">
            <img class="pointer-events-none w-20 select-none" :src="Logo" alt="Logo Sekolah" />

            <div class="flex flex-col justify-center leading-tight">
                <div class="flex items-baseline gap-1">
                    <h2 class="text-xl font-bold">SMK Pasundan</h2>
                    <span class="-mb-1 text-4xl font-extrabold text-[#D35400]">2</span>
                </div>
                <span class="text-xl font-bold">Bandung</span>
            </div>
        </div>

        <div class="w-full max-w-[400px] rounded-2xl bg-gray-50 p-8 shadow-sm">
            <div class="mb-6">
                <p class="text-base font-bold text-gray-800">Learning Management System</p>
                <hr class="mt-2 border-t-2 border-gray-300" />
            </div>

            <form @submit.prevent="loginPost" class="space-y-5">
                <div>
                    <FormLabel class="mb-2 ml-1 block text-sm font-medium">Username</FormLabel>
                    <Input
                        :state="form.errors?.email ? 'invalid' : 'normal'"
                        :state-message="form.errors?.email"
                        :disabled="form.processing"
                        v-model="form.email"
                        type="text"
                        placeholder="Username"
                        class="w-full rounded-xl border-none bg-gray-200/60 px-4 py-3 text-gray-800 placeholder:text-gray-400 focus:ring-2 focus:ring-[#091057]"
                    />
                </div>

                <div>
                    <FormLabel class="mb-2 ml-1 block text-sm font-medium">Password</FormLabel>
                    <Input
                        :state="form.errors?.password ? 'invalid' : 'normal'"
                        :state-message="form.errors?.password"
                        :disabled="form.processing"
                        v-model="form.password"
                        type="password"
                        placeholder="Password"
                        class="w-full rounded-xl border-none bg-gray-200/60 px-4 py-3 text-gray-800 placeholder:text-gray-400 focus:ring-2 focus:ring-[#091057]"
                    />
                </div>

                <Button :disabled="form.processing" type="submit" class="w-full rounded-full bg-[#091057] py-3 font-bold text-white transition-colors hover:bg-[#050938]"> SIGNIN </Button>
            </form>
        </div>
    </div>
</template>

<script setup lang="ts">
import Button from '@/components/button.vue';
import FormLabel from '@/components/form-label.vue';
import Input from '@/components/input.vue';
import { useForm } from '@inertiajs/vue3';
import Logo from '../../logo/logo.png';
import { post } from '@/routes/auth/login';
import { watch } from 'vue';
import { toast } from 'vue3-toastify';

const form = useForm<{
    email: string;
    password: string;
}>({
    email: '',
    password: '',
});
async function loginPost(){
    await form.submit(post())
}
watch(()=>form.hasErrors,()=>{
   if( form.errors?.email ){ 
       toast.error(form.errors?.email)
   }
})
</script>

