<script>
import axios from 'axios';
import SectionTitle from "@/Components/SectionTitle.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import TertiaryButton from "@/Components/TertiaryButton.vue";

export default {
    components: {TertiaryButton, SecondaryButton, PrimaryButton, SectionTitle},
    data() {
        return {
            educationalExperiences: [],
            users: [],
            eeDeleted: '',
            loadingEE: false,
            loadingUsers: false,
            errorEE: null,
            errorUser: null,
            errorDeleting: null,
            isTeacher: true,
        };
    },
    props: {
        auth: Object
    },
    mounted() {
        axios.defaults.withCredentials = true;
        this.fetchEducationalExperience();
    },
    methods: {
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
        async deleteEducationalExperience(educationalExperience) {
            this.errorDeleting = null
            try {
                const response = await axios.delete(`api/educational-experiences/${educationalExperience}`);
                this.fetchEducationalExperience()
            } catch (error) {
                this.errorDeleting = error.response?.data?.message ||
                    'No se pudo eliminar la experiencia educativa';
                console.error('Error al eliminar la experiencia educativa:', error);
            }
        },
    }
}
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex justify-between">
            <h1 class="text-2xl font-medium text-gray-900">
                Experiencias educativas
            </h1>
        </div>

        <div v-if="isTeacher" class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">

            <div v-if="loadingEE" class="text-center">
                Buscando experiencia educativa...
            </div>

            <div v-if="loadingUsers" class="text-center">
                Buscando usuarios...
            </div>

            <div v-else-if="errorEE" class="text-red-600">
                {{ errorEE }}
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <a
                        v-for="educationalExperience in educationalExperiences.educationalExperiences"
                        :key="educationalExperience.id"
                        :href="route('groups.list', { 'educationalExperience': educationalExperience.id })"
                        class="bg-white p-6 rounded-lg shadow-md hover:bg-gray-100 transition"
                    >
                        <section-title>
                            <template #title>
                                {{ educationalExperience.name || 'Sin experiencia educativa' }}
                            </template>

                            <template #description>
                                <strong>NRC:</strong> {{ educationalExperience.nrc }} <br>
                                <strong>Modalidad:</strong> {{ educationalExperience.modality }}
                            </template>

                            <template #aside>
                                <a :href="route('educational-experience.edit', { 'educationalExperience': educationalExperience.id })">
                                    <secondary-button>Editar</secondary-button>
                                </a>
                                <a
                                    href="#"
                                    @click.prevent="deleteEducationalExperience(educationalExperience.id)">
                                    <tertiary-button>Eliminar</tertiary-button>
                                </a>
                            </template>

                        </section-title>
                    </a>
            </div>
        </div>

        <div v-else class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">

            <div v-if="loadingEE" class="text-center">
                Buscando experiencia educativa...
            </div>

            <div v-if="loadingUsers" class="text-center">
                Buscando usuarios...
            </div>

            <div v-else-if="errorEE" class="text-red-600">
                {{ errorEE }}
            </div>


            <div v-else class="grid grid-cols-1 md:grid-cols-2 gap-6">
            Soy alumno
                <a
                    v-for="educationalExperience in educationalExperiences.educationalExperiences"
                    :key="educationalExperience.id"
                    :href="route('groups.list', { 'educationalExperience': educationalExperience.id })"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-gray-100 transition"
                >
                    <section-title>
                        <template #title>
                            {{ educationalExperience.name || 'Sin experiencia educativa' }}
                        </template>

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
