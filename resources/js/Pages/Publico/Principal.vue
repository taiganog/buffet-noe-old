<script setup lang="ts">
	import LayoutPrincipal from '@/Layouts/Publico/LayoutPrincipal.vue';
</script>

<template>
	<LayoutPrincipal>
		<div class="flex">
			<img src="img/publico/main-img.jpg" class="w-full brightness-75 object-cover overflow-hidden h-screen min-h-full border-b-black">
			<div class="z-10 bg-black opacity-85 absolute text-zinc-200 left-44 top-44 rounded-xl max-w-4xl">
				<div class="p-10">
					<h2 class="text-center text-6xl font-black"><b>Arca de Noé</b></h2><br>
					<h1 class="text-center text-3xl mb-5">Serviço de Buffet</h1><br>
					<p class="text-justify text-xl">Descubra o sabor da celebração com nosso buffet excepcionalmente elaborado, onde cada detalhe é uma experiência sensorial única.</p>
				</div>
			</div>
		</div>
	</LayoutPrincipal>
</template>