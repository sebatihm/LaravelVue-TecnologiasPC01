<script>
export default {
    props: {
        group: Object,
        educationalExperience: Object,
        teacher: Object,
    },
};
</script>

<template>
    <div>
        <h1 class="text-2xl font-bold mb-4">{{ group.name || 'Grupo sin nombre' }}</h1>

        <p><strong>Experiencia educativa:</strong> {{ educationalExperience?.name || 'Sin experiencia educativa' }}</p>
        <p><strong>Turno:</strong> {{ group.shift }}</p>
        <p><strong>Periodo:</strong> {{ group.period }}</p>
        <p>
            <strong>Docente:</strong>
            {{ teacher?.name ? teacher.name + ' ' + teacher.last_name + ' ' + teacher.mother_last_name : 'No asignado' }}
        </p>
    </div>
</template>

<style scoped>

</style>
