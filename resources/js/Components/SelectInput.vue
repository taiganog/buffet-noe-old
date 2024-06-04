<script setup lang="ts">
	import { ref } from 'vue';

	const model = defineModel<string>({ required: true });
	const input = ref<HTMLInputElement | null>(null);

	const tiposFesta = {
            'FESTA_INFANTIL': 'Festa infantil',
            '15_ANOS': 'Festa 15 anos',
            'FESTA_ADULTO': 'Festa adulta',
            'FORMATURA': 'Formatura',
            'CASAMENTO': 'Casamento',
            'CONFRATERNIZACAO': "Confraternização"
    };

</script>

<template>
	<select v-model="model" class="border-gray-300 focus:border-yellow-500 focus:ring-yellow-500 rounded-xl shadow-sm h-16 text-black w-full my-1 md:m-0 md:w-auto">
		<option value="" disabled selected>Selecione o tipo de evento</option>
		<option v-for="(tipo, valor) in tiposFesta" :value="valor" :key="tipo">{{ tipo }}</option>
	</select>
</template>