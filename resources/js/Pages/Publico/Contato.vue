<script setup lang="ts">
	import LayoutPrincipal from '@/Layouts/Publico/LayoutPrincipal.vue';
	import TextInput from '@/Components/TextInput.vue';
	import SelectInput from '@/Components/SelectInput.vue';
	import TextArea  from '@/Components/TextArea.vue';
	import { ref } from 'vue';
	import { useForm, router } from '@inertiajs/vue3';

	const form = useForm({
	    nome: '',
	    email: '',
	    telefone: '',
	    tipo: '',
	    mensagem: ''
	});

	const enviar = () => {
		form.post(route('contato'));
		//form.reset(),
	};

</script>

<template>
	<LayoutPrincipal>
		<div class="flex">
			<img src="img/publico/contato-background.jpg" class="w-full brightness-75 object-cover overflow-hidden h-5/6 min-h-screen border-b-2 border-black">
			<div class="z-10 bg-black opacity-85 absolute text-zinc-200 right-44 top-44 rounded-xl max-w-4xl">
				<div class="p-10 text-center">
					<span class="text-4xl font-black">Solicite um orçamento ou deixe um elogio, entraremos em contato!</span>
				</div>

				<form @submit.prevent="enviar" class="text-center">
					<div class="grid lg:grid-cols-2 gap-5 p-5">
						<TextInput 
							id="nome"
							type="text"
							placeholder="Insira seu nome"
							v-model="form.nome"
							required
						/>
						
						<TextInput 
							id="email"
							type="email"
							placeholder="Insira seu E-mail"
							v-model="form.email"
							required
						/>
						
						<TextInput 
							id="telefone"
							type="text"
							placeholder="Insira seu telefone"
							v-model="form.telefone"
							required							
						/>

						<SelectInput
							id="tipo"
							v-model="form.tipo"
							required
						/>

						<TextArea class="col-start-1 col-end-3" 
							id="mensagem"
							v-model="form.mensagem"
							placeholder="Conte-nos sobre sua ideia!"
							required
						/>
					</div>

					<input type="submit" value="Enviar" :disabled="form.processing" class="p-5 bg-green-500 rounded-xl border-2 border-green-700 focus:bg-green-600 m-5 w-1/3">
				</form> 
			</div>
		</div>
	</LayoutPrincipal>
</template>