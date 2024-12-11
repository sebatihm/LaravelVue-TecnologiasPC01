<script>
import axios from 'axios';
import SectionTitle from "@/Components/SectionTitle.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue"; // Asegúrate de importar axios

export default {
    components: {PrimaryButton, SectionTitle},
    data() {
        return {
            educationalExperiences: [],
            users: [],
            loadingEE: false,
            loadingUsers: false,
            errorEE: null,
            errorUser: null,
        };
    },
    props: {
        auth: Object
    },
    // El hook mounted se ejecuta después de que el componente se monta en el DOM
    mounted() {
        axios.defaults.withCredentials = true;
        this.fetchEducationalExperience();
    },
    methods: {
       /* async fetchGroups() {
            this.loading = true;
            this.error = null;

            try {
                const response = await axios.get(`/api/groups`);
                this.groups = response.data;
            } catch (error) {
                this.error = error.response?.data?.message ||
                    'No se pudieron cargar los grupos';
                console.error('Error al cargar los grupos:', error);
            } finally {
                this.loading = false;
            }
        },*/
        async fetchEducationalExperience() {
            this.loadingEE = true;
            this.errorEE = null;

            try {
                const response = await axios.get(`/api/educational-experiences`);
                this.educationalExperiences = response.data;
            } catch (error) {
                this.errorEE = error.response?.data?.message ||
                    'No se pudieron cargar los experiencias educativas';
                console.error('Error al cargar los experiencias educativas:', error);
            } finally {
                this.loadingEE = false;
            }
        },
        /*async fetchUsers() {
            this.loadingUsers = true;
            this.errorUser = null;

            try {
                const response = await axios.get(`/api/users`);
                this.users = response.data.reduce((acc, exp) => {
                    acc[exp.id] = exp;
                    return acc;
                }, {});
                console.log(this.users)
            } catch (error) {
                this.errorUser = error.response?.data?.message ||
                    'No se pudieron cargar los usuarios';
                console.error('Error al cargar los usuarios:', error);
            } finally {
                this.loadingUsers = false;
            }
        }*/

    }
}
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex justify-between">
            <h1 class="text-2xl font-medium text-gray-900">
                Experiencias educativas
            </h1>
<!--            <a :href="route('groups.create')">
                <PrimaryButton type="button">Crear grupo</PrimaryButton>
            </a>-->
        </div>

        <div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
<!--            <div v-if="loading" class="text-center">
                Cargando grupos...
            </div>-->

            <div v-if="loadingEE" class="text-center">
                Buscando experiencia educativa...
            </div>

            <div v-if="loadingUsers" class="text-center">
                Buscando usuarios...
            </div>

            <div v-else-if="errorEE" class="text-red-600">
                {{ errorEE }}
            </div>


            <!-- Mostrar los cursos -->
            <div v-else class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <a
                        v-for="educationalExperience in educationalExperiences.educationalExperiences"
                        :key="educationalExperience.id"
                        :href="route('groups.list', { 'educational-experience': educationalExperience.id })"
                        class="bg-white p-6 rounded-lg shadow-md hover:bg-gray-100 transition"
                    >
                        <section-title>
                            <!-- Slot para el título -->
                            <template #title>
                                {{ educationalExperience.name || 'Sin experiencia educativa' }}
                            </template>

                            <!-- Slot para la descripción -->
                            <template #description>
                                <strong>NRC:</strong> {{ educationalExperience.nrc }} <br>
                                <strong>Modalidad:</strong> {{ educationalExperience.modality }}
                            </template>
                        </section-title>
                    </a>
            </div>
        </div>
    </div>
</template>
