<script setup>
import { useAuthStore } from "../store/auth";

const authStore = useAuthStore();

const handleLogout = () => {
authStore.logout();
};
</script>

<template>
    <div v-if="authStore.user" class="min-h-screen bg-gray-100 flex flex-col">
        <header class="bg-[rgb(25,58,113)] text-white py-4 px-6 flex justify-between items-center">
        <h1 class="text-lg font-bold">Bem vindo, {{authStore.user.name}}</h1>
        <nav class="space-x-4">
            <router-link to="/dashboard" class="hover:underline">Dashboard</router-link>
        </nav>
        <button @click="handleLogout" class="bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600">
            Sair
        </button>
        </header>
        <main class="flex-grow p-6">
        <slot />
        </main>
    </div>
    <div v-else class="flex justify-center items-center min-h-screen">
        <p class="text-gray-600">Carregando...</p>
    </div>
</template>