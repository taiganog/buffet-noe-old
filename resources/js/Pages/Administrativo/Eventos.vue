<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue'

import { Head } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const props = defineProps<{
    eventos?;
}>();

</script>

<template>
    <Head title="Eventos" />

    <AuthenticatedLayout>
        <template #header class="">Eventos</template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex justify-between bg-black">
                        <div class="p-6 text-white font-semibold">Eventos marcados</div>

                        <a href="/admin/eventos/novo" class="m-5">
                            <PrimaryButton>Adicionar Evento</PrimaryButton>
                        </a>
                    </div>

                    <div v-for="evento in eventos" :key="evento.id">
                        <div>{{ evento.data }}</div>
                        <div>{{ evento.nome }}</div><br />
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
