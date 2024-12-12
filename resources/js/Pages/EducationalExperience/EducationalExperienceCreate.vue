<script setup>
import { useForm } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

// Datos reactivos para el formulario
const form = useForm({
    name: '', // Nombre de la experiencia educativa
    educativeProgram: '', // Programa educativo seleccionado
    nrc: '', // NRC
    modality: '', // Modalidad seleccionada
    description: '', // Descripción opcional
});

const educationalPrograms = [
    { value: '1', label: 'Ingeniería de Software' },
    { value: '2', label: 'Administración' },
    { value: '3', label: 'Gestión y Dirección de Negocios' },
];

const modalities = [
    { value: 'ESCOLARIZADO', label: 'ESCOLARIZADO' },
    { value: 'VIRTUAL', label: 'VIRTUAL' },
];

// Función para enviar el formulario
const submit = () => {
    form.post(route('educational-experiences.store'), {
        onFinish: () => form.reset(), // Reinicia la descripción después del envío
    });
};
</script>


<template>
    <AppLayout>
        <template #header>
            Crear experiencia educativa
        </template>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Nombre" />
                <TextInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="program" value="Programa educativo" />
                <select id="program" v-model="form.educativeProgram" class="mt-1 block w-full">
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option v-for="(program, index) in educationalPrograms" :key="index" :value="program.value">
                        {{ program.label }}
                    </option>
                </select>
                <InputError class="mt-2" :message="form.errors.program" />
            </div>

            <div class="mt-4">
                <InputLabel for="nrc" value="NRC" />
                <TextInput
                    id="nrc"
                    v-model="form.nrc"
                    type="text"
                    class="mt-1 block w-full"
                    required
                />
                <InputError class="mt-2" :message="form.errors.nrc" />
            </div>

            <div class="mt-4">
                <InputLabel for="modality" value="Modalidad" />
                <select id="modality" v-model="form.modality" class="mt-1 block w-full">
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option v-for="(modality, index) in modalities" :key="index" :value="modality.value">
                        {{ modality.label }}
                    </option>
                </select>
                <InputError class="mt-2" :message="form.errors.modality" />
            </div>

            <div class="mt-4">
                <InputLabel for="description" value="Descripción" />
                <TextInput
                    id="description"
                    v-model="form.description"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError class="mt-2" :message="form.errors.description" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <PrimaryButton
                    class="ms-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Guardar
                </PrimaryButton>
            </div>
        </form>
    </AppLayout>
</template>


<style scoped></style>
