<script setup lang="ts">
import { onMounted, ref } from 'vue';

const model = defineModel<string>({ required: true });

const input = ref<HTMLInputElement | null>(null);

onMounted(() => {
    if (input.value?.hasAttribute('autofocus')) {
        input.value?.focus();
    }
});

defineExpose({ focus: () => input.value?.focus() });
</script>

<template>
    <input
        class="border-gray-300 focus:border-yellow-500 focus:ring-yellow-500 rounded-xl shadow-sm h-16 text-black my-1 md:my-0 w-full"
        v-model="model"
        ref="input"
    />
</template>
