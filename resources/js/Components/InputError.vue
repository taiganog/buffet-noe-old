<script setup lang="ts">
defineProps<{
    message?: string;
}>();
</script>

<template>
    <div v-show="message">
        <p class="text-sm text-red-600 font-bold">
            {{ message }}
        </p>
    </div>
</template>
