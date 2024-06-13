<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Modal from '@/Components/Modal.vue';
import CadastroInput from '@/Components/Administrativo/CadastroInput.vue';
import RotuloCadastro from '@/Components/Administrativo/RotuloCadastro.vue';
import SelectInput from '@/Components/SelectInput.vue';
import Checkbox from '@/Components/Checkbox.vue';
import TextArea from '@/Components/TextArea.vue';
import InputError from '@/Components/InputError.vue';

import { Head, useForm } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

defineProps<{
    eventos?: Evento[];
    responsaveis?: Responsavel[];
}>();

const form = useForm({
    // Responsável
    nome: '',
    telefone: '',
    telefone_2: '',
    cpf: '',
    rg: '',
    endereco: '',

    // Evento
    local: '',
    data: '',
    tipo: '',
    numero_convidados: '',
    observacao: '',
});

const enviar = () => {
    form.post(route('eventos.salvar'));
};

const closeModal = () => {
    eventoModal.value = false;
    cadastroModal.value = false;
    complementosModal.value = false;
};

const eventoVisible = ref(true);

// Controladores de Modal
const eventoModal = ref(false);
const cadastroModal = ref(false);
const complementosModal = ref(false);

const eventoAtual = ref(1);
</script>

<template>
    <Head title="Eventos" />

    <AuthenticatedLayout>
        <template #header class="">Eventos</template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex justify-between bg-[#171717]">
                        <div class="p-6 text-white font-semibold">Eventos marcados</div>

                        <div class="content-center pr-6">
                            <PrimaryButton @click="cadastroModal = !cadastroModal" class="m-5">Adicionar Evento</PrimaryButton>
                            <PrimaryButton @click="eventoVisible = !eventoVisible">Esconder</PrimaryButton>
                        </div>
                    </div>

                    <div v-show="eventoVisible">
                        <!-- Listagem de eventos principais -->
                        <div class="grid grid-cols-3 text-semibold px-5 pt-5">
                            <span class="text-right">Nome Responsável</span>
                            <span class="text-center">Evento</span>
                            <span class="text-left">Data</span>
                        </div>

                        <hr class="text-red-500 w-11/12 m-auto b-0 h-1" />

                        <div class="p-5 max-h-[600px] overflow-auto">
                            <div v-for="(evento, key) in eventos" class="grid grid-cols-3 text-sm p-1">
                                <span @click="eventoModal = !eventoModal; eventoAtual = key"
                                      class="text-blue-400 hover:text-blue-600 cursor-pointer text-right">
                                      {{ evento.nome_responsavel }}
                                </span>
                                <span class="text-center">{{ evento.tipo }}</span>
                                <span class="text-left">{{ evento.data }}</span>
                                <hr class="col-start-1 col-end-4" />
                            </div>
                        </div>
                    </div>

                    <!-- Modal para descrição de evento -->
                    <Modal :show="eventoModal" maxWidth="full" @close="closeModal">
                        <div class="text-center bg-black text-white font-semibold p-4 flex justify-between">
                            <span class="content-center">{{ eventos[eventoAtual].nome_responsavel }} - {{ eventos[eventoAtual].tipo }}</span>
                            <div>
                                <PrimaryButton class="mx-5">Editar</PrimaryButton>
                                <PrimaryButton @click="closeModal">Fechar</PrimaryButton>
                            </div>
                        </div>

                        <div class="p-5 text-sm">
                            <div class="grid grid-cols-3 text-center">
                                <span class="">Telefone da responsável: {{ eventos[eventoAtual].telefone_responsavel }}</span>
                                <span class="border-x border-black">Número de convidados: {{ eventos[eventoAtual].numero_convidados }}</span>
                                <span>Valor: R$:{{ eventos[eventoAtual].valor }},00</span>
                            </div>
                            <hr class="my-5 border-black">
                            <div>
                                <span class="font-semibold underline">Observação</span>
                                <p class="mt-2">{{ eventos[eventoAtual].observacao }}</p>
                            </div>
                        </div>
                    </Modal>

                    <!-- Modal para cadastro de evento -->
                    <Modal :show="cadastroModal" maxWidth="full" @close="closeModal">
                        <div class="text-center bg-[#171717] text-white font-semibold p-4 flex justify-between">
                            <span class="content-center">Cadastro de Evento</span>
                            <PrimaryButton @click="closeModal">Fechar</PrimaryButton>
                        </div>

                        <!-- TODO - Implementar InputError em form -->
                        <form @submit.prevent='enviar'>
                            <div class="p-3 text-sm grid grid-cols-2 gap-2">
                                <!-- Responsável -->
                                <div class="border border-[#171717] rounded-md shadow-md">
                                    <div class="p-2 bg-[#171717] text-white font-semibold rounded-tr-[3px] rounded-tl-[3px]">
                                        <span>Cliente</span>
                                    </div>

                                    <div class="p-2 grid grid-cols-2 gap-2">
                                        <RotuloCadastro class="content-center" for="nome">Nome: </RotuloCadastro>
                                        <CadastroInput id="nome" type="text" v-model="form.nome" />

                                        <RotuloCadastro class="content-center" for="endereco">Endereço: </RotuloCadastro>
                                        <CadastroInput id="endereco" type="text" v-model="form.endereco" />

                                        <RotuloCadastro class="content-center" for="telefone">Telefone: </RotuloCadastro>
                                        <CadastroInput id="telefone" type="tel" v-model="form.telefone" />

                                        <RotuloCadastro class="content-center" for="telefone_2">Telefone Secundário: </RotuloCadastro>
                                        <CadastroInput id="telefone_2" type="tel" v-model="form.telefone_2" />

                                        <RotuloCadastro class="content-center" for="cpf">CPF/CNPJ: </RotuloCadastro>
                                        <CadastroInput id="cpf" type="text" v-model="form.cpf"/>

                                        <RotuloCadastro class="content-center" for="rg">RG: </RotuloCadastro>
                                        <CadastroInput id="rg" type="text" v-model="form.rg"/>
                                    </div>
                                </div>

                                <!-- Eventos -->
                                <div class="border border-[#171717] rounded-md shadow-md">
                                    <div class="p-2 bg-[#171717] text-white font-semibold rounded-tr-[3px] rounded-tl-[3px]">
                                        <span>Evento</span>
                                    </div>

                                    <div class="p-2 grid grid-cols-2 gap-2 relative">
                                        <RotuloCadastro class="content-center" for="local">Local: </RotuloCadastro>
                                        <CadastroInput id="local" type="text" v-model="form.local" />

                                        <RotuloCadastro class="content-center" for="data">Data: </RotuloCadastro>
                                        <CadastroInput id="data" type="date"v-model="form.data" />

                                        <RotuloCadastro class="content-center" for="numero_convidados">Nº de Convidados: </RotuloCadastro>
                                        <CadastroInput id="numero_convidados" type="text" v-model="form.numero_convidados" />

                                        <RotuloCadastro class="content-center" for="tipo">Tipo de Evento: </RotuloCadastro>
                                        <SelectInput class="h-auto w-full bg-slate-200 rounded-lg
                                                    focus:border-0 focus:ring-2 focus:ring-yellow-400
                                                    border-[#6b7280]"
                                                    id="tipo"
                                                    v-model="form.tipo" />
                                    </div>
                                </div>

                                <div v-show="form.hasErrors" class="text-center">Cheque as informações - Formulário preenchido errado!</div>

                                <!-- Envio de formulário de cadastro de evento inicial -->
                                <div class="p-2 col-start-1 col-end-3 text-center">
                                    <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Enviar Dados</PrimaryButton>
                                </div>
                            </div>
                        </form>
                    </Modal>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
