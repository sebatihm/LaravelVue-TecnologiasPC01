<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {useForm} from "@inertiajs/vue3";

export default{
    components: {InputLabel, PrimaryButton, InputError, TextInput, AppLayout},
    data(){
        return {
            loading: false,
            error: null,
        }
    },
    props: {
        auth: Object,
        educationalExperience: Object,
    },
    methods:{
        async fetchEducationalExperience() {
            this.loading = true;
            this.error = null;

            try {
                const response = await axios.get(`/api/educational-experiences/edit`);
                this.educationalExperiences = response.data;
            } catch (error) {
                this.error = error.response?.data?.message ||
                    'No se pudieron cargar los experiencias educativas';
                console.error('Error al cargar los experiencias educativas:', error);
            } finally {
                this.loading = false;
            }
        },
    },
    setup(props) {
        const form = useForm({
            nrc: props.educationalExperience.nrc,
            name: props.educationalExperience.name,
            modality: props.educationalExperience.modality,
            educative_program: props.educationalExperience.educative_program,
            description: props.educationalExperience.description,
        });

        const submit = () => {
            form.patch(`/api/educational-experiences/${props.educationalExperience.id}`, {
                onFinish: () => form.reset(),
            });
        };


        const modalities = [
            { value: 'Escolarizado', label: 'ESCOLARIZADO' },
            { value: 'Virtual', label: 'VIRTUAL' },
        ];

        return {
            form,
            submit,
            modalities,
        };
    }
}
</script>

<template>
<AppLayout>
    <template #header>
        Editar experiencia educativa
    </template>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex justify-between">
                    <h3 class="text-2xl font-medium text-gray-900">
                        Editar experiencia educativa
                    </h3>
                </div>
                    <form @submit.prevent="submit" class="py-12 px-64 flex flex-col">
                        <div>
                            <InputLabel for="nrc" value="NRC" />
                            <TextInput
                                id="nrc"
                                v-model="form.nrc"
                                type="text"
                                class="mt-1 block w-full"
                                required
                                autofocus
                                autocomplete="username"
                            />
                            <InputError class="mt-2" :message="form.errors.nrc" />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="name" value="Nombre" />
                            <TextInput
                                id="name"
                                v-model="form.name"
                                type="text"
                                class="mt-1 block w-full"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.name" />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="modality" value="Modalidad" />
                            <select
                                v-model="form.modality"
                                class="min-w-96 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            >
                                <option value="" disabled>Seleccione una modalidad</option>
                                <option
                                    v-for="mod in modalities"
                                    :key="mod.value"
                                    :value="mod.value"
                                >
                                    {{ mod.label }}
                                </option>
                            </select>
                            <InputError class="mt-2" :message="form.errors.modality" />
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <div class="flex items-center justify-center mt-4">
                                <PrimaryButton
                                    class="ms-4"
                                    :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing"
                                    @click="submit"
                                >
                                    Guardar cambios
                                </PrimaryButton>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</AppLayout>
</template>
