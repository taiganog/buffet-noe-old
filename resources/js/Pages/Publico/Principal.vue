<script setup lang="ts">
	import LayoutPrincipal from '@/Layouts/Publico/LayoutPrincipal.vue';
</script>

<template>
	<LayoutPrincipal>
		<div class="flex">
			<img src="img/publico/main-img.jpg" class="w-full md:brightness-75 brightness-50 object-cover overflow-hidden h-screen min-h-full border-b-black">
			<div class="z-10 md:bg-black opacity-85 absolute text-zinc-200 xl:left-44 left-5 md:top-44 top-44 right-5 rounded-xl xl:max-w-4xl">
				<div class="p-10">
					<h2 class="text-center md:text-6xl text-4xl font-black"><b>Arca de Noé</b></h2><br>
					<h1 class="text-center md:text-3xl text-2xl">Serviço de Buffet</h1><br>
					<hr class="w-11/12 m-auto mb-5 md:hidden">
					<p class="text-justify md:text-xl">Descubra o sabor da celebração com nosso buffet excepcionalmente elaborado, onde cada detalhe é uma experiência sensorial única. Atendemos as suas necessidades em todo o DF e entorno.</p>
				</div>
			</div>
		</div>
	</LayoutPrincipal>
</template>
