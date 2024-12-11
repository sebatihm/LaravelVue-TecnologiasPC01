<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";
import SectionTitle from "@/Components/SectionTitle.vue";

export default {
    components: { SectionTitle, Welcome, AppLayout },
    props: {
        educationalExperience: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            groups: [],
            loading: false,
            error: null,
        };
    },
    mounted() {
        this.fetchGroups(this.educationalExperience.id);
    },
    methods: {
        async fetchGroups(educationalExperience) {
            this.loading = true;
            this.error = null;

            try {
                const response = await axios.get(`/api/educational-experiences/${educationalExperience}/groups`);
                this.groups = response.data;
            } catch (error) {
                this.error = error.response?.data?.message || 'No se pudieron cargar los grupos';
                console.error('Error al cargar los grupos:', error);
            } finally {
                this.loading = false;
            }
        },
    }
};
</script>


<template>
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ educationalExperience.name }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex justify-between">
                        <h3 class="text-2xl font-medium text-gray-900">
                            Listado de grupos
                        </h3>
                    </div>

                    <div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">

                        <div v-if="loading" class="text-center">
                            Buscando grupos...
                        </div>

                        <div v-else-if="error" class="text-red-600">
                            {{ error }}
                        </div>

                        <!-- Mostrar los cursos -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <a
                                v-for="group in groups"
                                :key="group.id"
                                :href="route('groups.show', { 'group': group.id })"
                                class="bg-white p-6 rounded-lg shadow-md hover:bg-gray-100 transition"
                            >
                                <section-title>
                                    <template #title>
                                        {{group.name}}
                                    </template>

                                    <template #aside>
                                        {{group.period}}
                                    </template>

                                    <template #description>
                                        {{group.shift}}
                                    </template>
                                </section-title>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
