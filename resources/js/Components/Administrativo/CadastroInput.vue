<script setup lang="ts">
import { ref } from 'vue';

const model = defineModel<string | null>({ required: true });

const input = ref<HTMLInputElement | null>(null);
</script>

<template>
	<input
		class="w-full bg-slate-200 rounded-lg border-1 focus:border-0 focus:ring-2 focus:ring-yellow-400"
		v-model="model"
		ref="input"
	>
</template>
