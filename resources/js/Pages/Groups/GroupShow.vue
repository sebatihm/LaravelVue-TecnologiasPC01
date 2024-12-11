<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";
import axios from "axios";

export default {
    components: {Welcome, AppLayout},
    data() {
      return {
          students: [],
          loading: false,
          error: null,
      }
    },
    props: {
        group: Object,
        educationalExperience: Object,
        teacher: Object,
        auth: Object,
    },
    mounted() {
        this.fetchStudents(this.group.id)
    },
    methods: {
        async fetchStudents (groupID) {
            this.loading = true
            this.error = null

            try {
                const response = await axios.get(`/api/groups/${groupID}/students`);
                this.students = response.data;
                console.info(this.students)
            } catch (error) {
                this.error = error.response?.data?.message ||
                    'No se pudieron cargar los estudiantes';
                console.error('Error al cargar los estudiantes:', error);
            } finally {
                this.loading = false;
            }
        }
    }
};
</script>

<template>
    <AppLayout>
        <template #header>
            {{ group.name }}
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <!-- Información del grupo -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Información del Grupo</h3>
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <strong>Nombre del Grupo:</strong>
                            <p>{{ group.name }}</p>
                        </div>
                        <div>
                            <strong>Turno:</strong>
                            <p>{{ group.shift }}</p>
                        </div>
                        <div>
                            <strong>Período:</strong>
                            <p>{{ group.period }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Lista de estudiantes</h3>
                    <div class="mt-4">
                        <table class="min-w-full border border-gray-300 text-left">
                            <thead class="bg-gray-200">
                            <tr>
                                <th class="py-2 px-4 border-b">Nombre</th>
                                <th class="py-2 px-4 border-b">Apellido Paterno</th>
                                <th class="py-2 px-4 border-b">Apellido Materno</th>
                                <th class="py-2 px-4 border-b">Correo Electrónico</th>
                                <th class="py-2 px-4 border-b">Matrícula</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr
                                v-for="student in students"
                                :key="student.id"
                                class="hover:bg-gray-100">
                                <td class="py-2 px-4 border-b">{{ student.name }}</td>
                                <td class="py-2 px-4 border-b">{{ student.last_name }}</td>
                                <td class="py-2 px-4 border-b">{{ student.mother_last_name }}</td>
                                <td class="py-2 px-4 border-b">{{ student.email }}</td>
                                <td class="py-2 px-4 border-b">{{ student.tuition }}</td>
                            </tr>
                            <tr v-if="students.length === 0">
                                <td colspan="5" class="py-2 px-4 border-b text-center text-gray-500">
                                    No hay estudiantes registrados en este grupo.
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
