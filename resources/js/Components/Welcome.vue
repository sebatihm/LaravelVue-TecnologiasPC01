<script>
import axios from 'axios'; // Asegúrate de importar axios

export default {
    data() {
        return {
            groups: [],
            loading: false, // Es buena práctica tener un estado de carga
            error: null,
        };
    },
    props: {
        auth: Object
    },
    // El hook mounted se ejecuta después de que el componente se monta en el DOM
    mounted() {
        axios.defaults.withCredentials = true;
        this.fetchGroups(this.auth.user.id);
    },
    methods: {
        async fetchGroups(teacherId) {
            // Indicamos que estamos cargando
            this.loading = true;
            // Limpiamos cualquier error previo
            this.error = null;

            try {
                // Hacemos la petición al endpoint correspondiente
                const response = await axios.get(`/api/${teacherId}/groups`);
                // Guardamos los cursos en nuestro estado
                this.groups = response.data;
            } catch (error) {
                // Manejamos cualquier error que pueda ocurrir
                this.error = error.response?.data?.message ||
                    'No se pudieron cargar los grupos';
                console.error('Error al cargar los grupos:', error);
            } finally {
                // Independientemente del resultado, ya no estamos cargando
                this.loading = false;
            }
        }
    }
}
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <h1 class="text-2xl font-medium text-gray-900">
                Grupos
            </h1>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
            <!-- Mostrar mensaje de carga -->
            <div v-if="loading" class="col-span-full text-center">
                Cargando grupos...
            </div>

            <!-- Mostrar mensaje de error si existe -->
            <div v-else-if="error" class="col-span-full text-red-600">
                {{ error }}
            </div>

            <!-- Mostrar mensaje si no hay cursos -->
            <div v-else-if="groups.length === 0" class="col-span-full text-center">
                No hay grupos disponibles.
            </div>

            <!-- Mostrar los cursos -->
            <div v-else v-for="course in groups" :key="course.id" class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold">{{ course.name }}</h2>
                <!-- Agrega más detalles del curso según tu estructura de datos -->
            </div>
        </div>
    </div>
</template>
