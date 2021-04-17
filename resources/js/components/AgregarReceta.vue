<template>
    <input type="submit" 
    class="btn btn-primary" 
    value="Agregar Receta"
    @click="agregarReceta"
    >
</template>

<script>
    export default {
        methods:{
            agregarReceta(){
                this.$swal({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Guardado Correctamente',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        }
    }
</script>