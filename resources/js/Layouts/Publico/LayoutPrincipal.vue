<script setup lang="ts">
	
</script>
<template>
	<header class="z-20 shadow shadow-black bg-neutral-900 sticky top-0">
		<div class="flex align-center justify-between">
			<a :href="route('principal')"><img src="img/publico/logo.png" class="w-50 h-20 mt-3 ml-20"></a>
			<ul class="flex gap-10 text-zinc-200 text-xl p-8 mr-20 content-center text-center">
				<li class="duration-200 hover:text-2xl"><a :href="route('sobre_nos')">Sobre nós</a></li>
				<li class="duration-200 hover:text-2xl"><a :href="route('fotos')">Fotos</a></li>
				<li class="duration-200 hover:text-2xl"><a :href="route('contato')">Contato</a></li>
			</ul>
		</div>
	</header>

	<section>
		<slot />
	</section>

	<footer >
		<div class="py-1/5 lg:grid lg:grid-cols-8 sm:flex bg-neutral-900 text-zinc-200">
			<!-- Icones -->
			<div class="p-3 col-start-2">
				<ul class="flex gap-10 mt-3">
					<li><a href="https://www.instagram.com/buffet_arca_de_noe/" target="_blank"><img src="img/publico/instagram.png" class="h-10 w-10"></a></li>
					<li><a href="https://wa.me/556194186180" target="_blank"><img src="img/publico/whatsapp.png" class="h-10 w-10"></a></li>
					<li><a href="https://www.facebook.com/noebersoncruz/" target="_blank"><img src="img/publico/facebook.png" class="h-10 w-10"></a></li>
				</ul>
			</div>
			<!-- Endereço -->
			<div class="text-center pt-5 col-start-4 col-span-2">
				Suite 810 613 Friesen Mills,<br> Sauerchester, AR 68135-7288
			</div>
			<!-- Logo -->
			<div class="col-start-7">
				<img src="img/publico/logo.png" class="w-50 h-20 mt-3">
			</div>
			<div class="col-start-1 col-end-9">
				<hr class="w-4/5 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700	">
				<div class="text-zinc-200 text-center text-xs mt-3 mb-5">Desenvolvido e mantido por Taiguita - 2024/05</div>
			</div>
		</div>
	</footer>
</template>