<script setup lang="ts">
	
</script>
<template>
	<header class="z-20 shadow shadow-black bg-neutral-900 sticky">
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

	<footer>
		<div class="py-1/5 grid-rows-3">
			<div id="rodape-grid" class="p-3 flex">
				<li id="flex content-start gap-10">
					<ul><a href="google.com"><img src="img/publico/instagram.png" class="h-12 w-12"></a></ul>
					<ul><a href="https://wa.me/556194186180"><img src="img/publico/whatsapp.png" class="h-12 w-12"></a></ul>
					<ul><a href="google.com"><img src="img/publico/facebook.png" class="h-12 w-12"></a></ul>
				</li>
			</div>
			<div id="informacoes-rodape">
				Suite 810 613 Friesen Mills,<br> Sauerchester, AR 68135-7288
			</div>
			<div id="logo">
				<img src="{{ asset('img/publico/logo.png') }}" class="logo">
			</div>

			<div id="divisao-rodape">
				<hr />
				<div id="creditos">Desenvolvido e mantido por taiguita - 2024/05</div>
			</div>
		</div>
	</footer>
</template>