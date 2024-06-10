<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Modal from '@/Components/Modal.vue';

import { Head } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const props = defineProps<{
    eventos?;
}>();

const closeModal = () => { eventoModal.value = !eventoModal };

const eventoVisible = ref(true);
const eventoModal = ref(false);
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
                            <a href="/admin/eventos/novo" class="m-5">
                                <PrimaryButton>Adicionar Evento</PrimaryButton>
                            </a>

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

                    <!-- TODO: Implementar modal de descrição de evento -->
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
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
