<template>
    <div>
        <button @click="fetchUsers" :disabled="processing">
            Cargar Usuarios
        </button>
        <div v-if="processing">Cargando...</div>
        <div v-if="error" class="error">{{ error }}</div>
        <ul v-if="users.length">
            <li v-for="user in users" :key="user.id">{{ user.name }} - {{ user.email }}</li>
        </ul>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            users: [],
            processing: false,
            error: null
        };
    },
    methods: {
        async fetchUsers() {
            this.processing = true;
            this.error = null;

            try {
                const response = await axios.get('/api/users', { withCredentials: true });
                this.users = response.data;
            } catch (error) {
                this.error = error.response?.data?.message || 'Error al cargar los usuarios';
            } finally {
                this.processing = false;
            }
        }
    }
};
</script>

<style scoped>
.error {
    color: red;
}
</style>
