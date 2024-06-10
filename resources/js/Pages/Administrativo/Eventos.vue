<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Modal from '@/Components/Modal.vue';

import { Head } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const props = defineProps<{
    eventos?;
}>();

const eventoVisible = ref(true);
const eventoModal = ref(false);
const closeModal = () => { eventoModal.value = !eventoModal };
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

                            <PrimaryButton @click="eventoModal = !eventoModal">Esconder</PrimaryButton>
                        </div>
                    </div>

                    <div v-show="eventoVisible">
                        <!-- Listagem de eventos principais -->
                        <div class="grid grid-cols-3 text-center text-semibold py-5">
                            <span>Nome Responsável</span>
                            <span>Evento</span>
                            <span>Data</span>
                        </div>

                        <hr class="w-11/12 m-auto"/>

                        <div class="p-5 max-h-[600px] overflow-auto">
                            <div v-for="evento in eventos" :key="evento.id" class="grid grid-cols-3 text-center text-sm">
                                <span>{{ evento.nome_responsavel }}</span>
                                <span>{{ evento.tipo }}</span>
                                <span>{{ evento.data }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- TODO: Implementar modal de descrição de evento -->
                    <Modal :show="eventoModal" @close="closeModal">
                        <p>teste</p>
                    </Modal>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
