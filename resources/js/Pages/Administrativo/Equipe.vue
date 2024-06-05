<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CadastroInput from '@/Components/Administrativo/CadastroInput.vue';
import RotuloCadastro from '@/Components/Administrativo/RotuloCadastro.vue';

import { Head, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const form = useForm({
    nome: '',
    telefone: '',
    chave_pix: '',
});

</script>

<template>
    <Head title="Equipe" />

    <AuthenticatedLayout>
        <template #header class="">
            Equipes
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Cadastro de novo funcionário -->
                <div class="flex gap-3">
                    <div class="bg-white basis-1/3 overflow-hidden shadow-sm sm:rounded-lg p-4">
                        <div class="font-semibold mb-5">Cadastro para novo funcionário</div>

                        <RotuloCadastro for="nome" value="Nome"/>
                        <CadastroInput 
                        class="mb-5"
                        id="nome"
                        v-model="form.nome" />

                        <RotuloCadastro for="telefone" value="Telefone"/>
                        <CadastroInput 
                        class="mb-5"
                        id="telefone"
                        v-model="form.telefone" />

                        <RotuloCadastro for="chavePix" value="Chave PIX"/>
                        <CadastroInput 
                        id="chavePix"
                        v-model="form.chave_pix" />
                    </div>

                    <div class="bg-white basis-2/3 overflow-hidden shadow-sm sm:rounded-lg p-4">
                        <div class="font-semibold mb-5">Listagem de funcionários ativos</div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
