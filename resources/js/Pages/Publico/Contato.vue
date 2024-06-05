<script setup lang="ts">
	import LayoutPrincipal from '@/Layouts/Publico/LayoutPrincipal.vue';
	import TextInput from '@/Components/TextInput.vue';
	import SelectInput from '@/Components/SelectInput.vue';
	import TextArea  from '@/Components/TextArea.vue';
	import InputError from '@/Components/InputError.vue';

	import { useMatchMedia } from '@/Components/Metodos/useMatchMedia';
	import { ref } from 'vue';
	import { useForm } from '@inertiajs/vue3';

	const telaMobile = useMatchMedia('(max-width: 768px)')

	const form = useForm({
	    nome: '',
	    email: '',
	    telefone: '',
	    tipo: '',
	    mensagem: ''
	});

	const enviar = () => {
	    form.post(route('contato.salvar'), { preserveScroll: true, onSuccess: () => { form.reset(); }} );
	};

</script>

<template>
	<LayoutPrincipal>
		<div class="flex">
			<img src="img/publico/contato-background.jpg" class="w-full brightness-50 md:brightness-75 object-cover overflow-hidden h-5/6 min-h-[900px] border-b-2 border-black">
			<div class="z-10 md:bg-black opacity-85 absolute text-zinc-200 sm:left-auto xl:right-44 top-44 rounded-xl lg:max-w-4xl">
				<div class="p-10 text-center">
					<h1 class="text-2xl md:text-4xl font-black mb-5">Orçamento Buffet</h1>
					<span class="md:text-2xl">Nos conte sua ideia ou deixe um elogio, entraremos em contato!</span>
				</div>

				<!-- Erros de validação para layout mobile -->
				<div v-if="telaMobile && form.hasErrors" class="bg-red-500 rounded-xl text-center mx-5 p-3 font-bold">
					<div v-for="(erro, id) in form.errors" :key="id">{{ erro }}</div>
				</div>

				<form @submit.prevent="enviar" class="text-center">
					<div class="md:grid md:grid-cols-2 md:gap-5 p-5">
						<TextInput 
							id="nome"
							type="text"
							placeholder="Insira seu nome"
							v-model="form.nome"
						/>
						
						<TextInput 
							id="email"
							type="email"
							placeholder="Insira seu E-mail"
							v-model="form.email"
						/>
						<!-- Erros de validação para desktop -->
						<span><InputError v-if="!telaMobile" :message="form.errors.nome" /></span>
						<span><InputError v-if="!telaMobile" :message="form.errors.email" /></span>

						<TextInput 
							id="telefone"
							type="tel"
							v-mask="'(00) 90000-0000'"
							placeholder="Insira seu telefone"
							v-model="form.telefone"		
						/>

						<SelectInput
							id="tipo"
							v-model="form.tipo"	
						/>
						<!-- Erros de validação para desktop -->
						<span><InputError v-if="!telaMobile" :message="form.errors.telefone" /></span>
						<span><InputError v-if="!telaMobile" :message="form.errors.tipo" /></span>

						<TextArea class="sm:col-start-1 sm:col-end-3" 
							id="mensagem"
							v-model="form.mensagem"
							placeholder="Conte-nos sobre sua ideia!"
						/>
						<!-- Erros de validação para desktop -->
						<InputError v-if="!telaMobile" class="sm:col-start-1 sm:col-end-3" :message="form.errors.mensagem" />
					</div>

					<input type="submit" value="Enviar" :disabled="form.processing" class="p-5 bg-green-500 rounded-xl border-2 border-green-700 focus:bg-green-600 m-5 w-1/3">
				</form> 
			</div>
		</div>
	</LayoutPrincipal>
</template>