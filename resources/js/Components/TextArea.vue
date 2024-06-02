<script setup lang="ts">
	const model = defineModel<string>({ required: true });
</script>

<template>
	<textarea class="border-gray-300 focus:border-yellow-500 focus:ring-yellow-500 rounded-xl shadow-sm h-16 text-black resize-none h-32 w-full p-5" v-model="model" rows="4" cols="50"></textarea>
</template>