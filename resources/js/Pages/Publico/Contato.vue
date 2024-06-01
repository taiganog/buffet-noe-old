<script setup lang="ts">
	import LayoutPrincipal from '@/Layouts/Publico/LayoutPrincipal.vue';
	import { ref } from '@vue';

	enum TipoFesta {
		'FESTA_INFANTIL',
        '15_ANOS',
        'FESTA_ADULTO',
        'FORMATURA',
        'CASAMENTO',
        'CONFRATERNIZACAO',
	}

	const tipoFestas = Object.values(TipoFesta);
</script>

<template>
	<LayoutPrincipal>
		<div class="flex">
			<img src="img/publico/contato-background.jpg" class="w-full brightness-75 object-cover overflow-hidden h-5/6 min-h-screen border-b-2 border-black">
			<div class="z-10 bg-black opacity-85 absolute text-zinc-200 right-44 top-44 rounded-xl max-w-4xl">
				<div class="p-10 text-center">
					<span class="text-4xl font-black">Solicite um orçamento ou deixe um elogio, entraremos em contato!</span>
				</div>

				<form :action="route('contato')" method="post" class="">
					<div class="grid grid-cols-2 gap-5 p-5">
						<input type="text" name="nome" placeholder="Nos informe seu nome" class="">
						<input type="email" name="email" placeholder="Nos informe seu email" class="">
					</div>
				</form>
			</div>
		</div>
	</LayoutPrincipal>
</template>