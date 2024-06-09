<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CadastroInput from '@/Components/Administrativo/CadastroInput.vue';
import RotuloCadastro from '@/Components/Administrativo/RotuloCadastro.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

import { Head, useForm } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const props = defineProps<{
    funcionarios?;
}>();

const form = useForm({
    nome: '',
    telefone: '',
    chave_pix: '',
});

const cadastroVisible = ref(true);
const listaVisible = ref(true);

const cadastroToggle = computed(() => {
    return cadastroVisible.value ? 'Esconder' : 'Mostrar';
});

const enviar = () => {
    form.post(route('equipe'), { preserveScroll: true, onSuccess: () => { form.reset(); }} );
};

</script>

<template>
    <Head title="Equipe" />

    <AuthenticatedLayout>
        <template #header class="">
            Equipe
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="sm:flex gap-3 justify-between">
                  <!-- Cadastro de novo funcionário -->
                    <div class="bg-white sm:basis-1/4 overflow-hidden shadow-sm
                                sm:rounded-lg p-4 relative mb-3 sm:mb-0 max-h-[360px]">
                        <div class="sm:hidden text-sm absolute right-5 rounded-lg
                                    bg-gray-300 p-1 border border-gray-500 select-none"
                                    @click="cadastroVisible = !cadastroVisible">{{ cadastroToggle }}</div>
                        <div class="font-semibold mb-5">Novo funcionário</div>

                        <div v-show="cadastroVisible">
                            <form @submit.prevent="enviar">
                              <RotuloCadastro for="nome" value="Nome"/>
                              <CadastroInput
                              type="text"
                              class="mb-5"
                              id="nome"
                              v-model="form.nome" />

                              <RotuloCadastro for="telefone" value="Telefone"/>
                              <CadastroInput
                              type="tel"
                              class="mb-5"
                              v-mask="'(00) 90000-0000'"
                              id="telefone"
                              v-model="form.telefone" />

                              <RotuloCadastro for="chavePix" value="Chave PIX"/>
                              <CadastroInput
                              type="text"
                              id="chavePix"
                              v-model="form.chave_pix" />

                              <div class="text-right mt-5">
                                <PrimaryButton :disabled="form.processing">Enviar</PrimaryButton>
                              </div>
                            </form>
                        </div>
                    </div>
                    <!-- Display de funcionários existentes -->
                    <div class="bg-white sm:basis-2/3 overflow-hidden shadow-sm sm:rounded-lg
                                p-4 relative">

                        <div class="font-semibold mb-5">Funcionários ativos</div>

                        <div v-if="listaVisible && funcionarios" class="max-h-[600px] overflow-x-hidden sm:overflow-auto">
                            <table class="table-fixed w-full border-spacing-y-3 border-separate">
                                <thead class="text-lg border-y-2 border-black">
                                  <tr>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>Chave PIX</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr v-for="funcionario in funcionarios" :key="funcionario.id" class="text-sm">
                                    <td class="border-b">{{ funcionario.nome }}</td>
                                    <td class="text-center border-b">{{ funcionario.telefone }}</td>
                                    <td class="text-center border-b">{{ funcionario.chave_pix }}</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
