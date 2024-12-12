<script>
export default{
    data(){
        return {
            loading: false,
            error: nulll,
            educationalExperience: Object}
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
    }
}
</script>

<template>

</template>