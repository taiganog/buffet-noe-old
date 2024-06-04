<script setup lang="ts">
	
</script>
<template>
	<header class="z-20 shadow shadow-black bg-neutral-900 md:sticky top-0">
		<div class="md:flex grid md:align-center md:justify-between">
			<a :href="route('principal')"><img src="img/publico/logo.png" class="w-50 h-20 mt-3 md:ml-20 mx-auto"></a>
			<ul class="flex gap-10 text-yellow-200 underline md:no-underline md:text-zinc-200 text-md md:text-xl p-3 md:p-8 md:mr-20 justify-center text-center">
				<li class="duration-200 md:hover:text-2xl md:hover:text-yellow-200">Sobre nós</li>
				<li class="duration-200 md:hover:text-2xl md:hover:text-yellow-200"><a :href="route('fotos')">Fotos</a></li>
				<li class="duration-200 md:hover:text-2xl md:hover:text-yellow-200"><a :href="route('contato')">Contato</a></li>
			</ul>
		</div>
	</header>

	<section>
		<slot />
	</section>

	<footer >
		<div class="py-1/5 xl:grid xl:grid-cols-8 md:flex bg-neutral-900 text-zinc-200">
			<!-- Icones -->
			<div class="p-3 xl:col-start-2">
				<ul class="flex gap-10 mt-3 justify-center">
					<li><a href="https://www.instagram.com/buffet_arca_de_noe/" target="_blank"><img src="img/publico/instagram.png" class="h-10 w-10 object-scale-down"></a></li>
					<li><a href="https://wa.me/556194186180" target="_blank"><img src="img/publico/whatsapp.png" class="h-10 w-10 object-scale-down"></a></li>
					<li><a href="https://www.facebook.com/noebersoncruz/" target="_blank"><img src="img/publico/facebook.png" class="h-10 w-10 object-scale-down"></a></li>
				</ul>
			</div>
			<!-- Endereço -->
			<div class="text-center pt-5 xl:col-start-4 xl:col-span-2 p-5">Qd.02 16 - Mansões Village<br>Águas Lindas de Goiás - GO, 72916-215</div>
			<!-- Logo -->
			<div class="xl:col-start-7">
				<img src="img/publico/logo.png" class="w-50 h-20 block mt-3 mx-auto object-scale-down">
			</div>
			<!-- Creditos -->
			<div class="xl:col-start-1 xl:col-end-9">
				<hr class="w-4/5 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700	">
				<div class="text-zinc-200 text-center text-xs px-4 py-4">Desenvolvido e mantido por <i>Taiga Nogueira</i> - 2024/05</div>
			</div>
		</div>
	</footer>
</template>