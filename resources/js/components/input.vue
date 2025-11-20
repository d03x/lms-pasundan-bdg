<script setup lang="ts">
import { cn } from '@/lib/utils';
import { computed, InputHTMLAttributes, useModel } from 'vue';
const modelValue = defineModel();
const props = defineProps<
    {
        disabled?:boolean,
        state?: 'valid' | 'warning' | 'invalid'|"normal";
        stateMessage?: string;
        placeholder?:string,
        type?:InputHTMLAttributes['type'],
    }>();

const clasess = computed(() => {
    if (props.state == 'valid') {
        return `bg-green-50 border border-green-400 rounded py-1 px-3 block focus:ring-green-500 focus:border-green-500 text-gray-700`;
    } else if (props.state === 'invalid') {
        return `bg-red-50 border border-red-400 rounded py-1 px-3 block focus:ring-red-500 focus:border-red-500 text-gray-700`;
    } else if (props.state == 'warning') {
        return 'bg-yellow-50 border border-yellow-400 rounded py-1 px-3 block focus:ring-yellow-500 focus:border-yellow-500 text-gray-700';
    } else {
        return `block rounded outline-none border border-gray-200 bg-gray-100 px-3 py-1 text-gray-700 focus:border-primary focus:ring-primary`;
    }
});

const stateTextColor = computed(() => {
    if (props.state == 'valid') {
        return `text-green-700`;
    } else if (props.state === 'invalid') {
        return `text-red-700`;
    } else if (props.state == 'warning') {
        return 'text-yellow-700';
    } else {
        return `block rounded outline-none border border-gray-200 bg-gray-100 px-3 py-1 text-gray-700 focus:border-primary focus:ring-primary`;
    }
});
</script>

<template>
    <input v-model="modelValue" :disabled="disabled" :type="type" :class="cn([clasess, 'mb-0 w-full shadow-inner rounded-input border-neutral-300 bg-transparent placeholder:text-xs appearance-none px-2 py-2 text-sm outline-none'])"  :placeholder="props.placeholder" />
    <div v-if="state && stateMessage" :class="cn([stateTextColor, 'mt-1.5 flex items-center'])">
        <svg v-if="state === 'invalid'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path
                fill-rule="evenodd"
                d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                clip-rule="evenodd"
            />
        </svg>
        <svg v-else-if="state === 'valid'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path
                fill-rule="evenodd"
                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                clip-rule="evenodd"
            />
        </svg>
        <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path
                fill-rule="evenodd"
                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                clip-rule="evenodd"
            />
        </svg>
        <p class="ml-1 text-xs">{{ stateMessage }}</p>
    </div>
</template>
