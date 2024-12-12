<script>
import { useForm } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

export default {
    components: {
    AppLayout,
    InputLabel,
    TextInput,
    InputError,
    PrimaryButton
  },
  data() {
    return {
      loading: false,
      error: null,
    //   educationalExperience: null, // Initialize the educationalExperience property
    };
  },
  props: {
    auth: Object,
    educational_experience: Object, // Expect the educationalExperience to be passed as a prop
  },
  mounted() {
    // this.fetchEducationalExperience(this.educationalExperience.id); // Fetch the educational experience data when the component is created
  },
  methods: {
//     async fetchEducationalExperience(educationalExperience) {
//       this.loading = true;
//       this.error = null;

//       try {
//         const response = await axios.get(`/api/educational-experiences/${educationalExperience}/groups/create`);
//         this.educationalExperience = response.data; // Assign the response data to the component's educationalExperience property
//       } catch (error) {
//         this.error = error.response?.data?.message || 'No se pudieron cargar los experiencias educativas';
//         console.error('Error al cargar los experiencias educativas:', error);
//       } finally {
//         this.loading = false;
//       }
//     },
    },
  setup(props) {
    console.log(props)
    const form = useForm({
        educationalExperienceId: props.educational_experience.id, // Initialize the educational_experience_id to null
      name: '',
      shift: '',
      period: '',
    });

    const shifts = [
      { value: '1', label: 'Matutino' },
      { value: '2', label: 'Vespertino' },
    ];

    const submit = () => {
  form.post(route('educational-experiences.groups.store', { educational_experience: props.educational_experience }), {
    onFinish: () => form.reset(), // Reset the form after submission
  });
};

    return {
      form,
      shifts,
      submit,
    };
  }
}

</script>

<template>
    <AppLayout>
        <template #header>
            Crear grupo
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
                <InputLabel for="shift" value="Turno" />
                <select id="shift" v-model="form.shift" class="mt-1 block w-full">
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option v-for="(shift, index) in shifts" :key="index" :value="shift.value">
                        {{ shift.label }}
                    </option>
                </select>
                <InputError class="mt-2" :message="form.errors.program" />
            </div>

            <div class="mt-4">
                <InputLabel for="period" value="Periodo" />
                <TextInput
                    id="period"
                    v-model="form.period"
                    type="text"
                    class="mt-1 block w-full"
                    required
                />
                <InputError class="mt-2" :message="form.errors.nrc" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <PrimaryButton
                    class="ms-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                    @click="submit"
                >
                    Guardar
                </PrimaryButton>
            </div>
        </form>
    </AppLayout>
</template>