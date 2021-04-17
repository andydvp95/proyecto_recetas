<template>
    <input type="submit" 
    class="btn btn-danger d-block w-100 mb-2" 
    value="Eliminar x"
    @click="eliminarReceta"
    >
</template>

<script>
    export default {
        props: ['recetaId'],
        methods:{
            eliminarReceta(){
            this.$swal({
                title: '¿Desea eliminar esta receta?',
                text: "Esta acción no se revierte",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#6fb4ec',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si!',
                cancelButtonText: 'No'
                }).then((result) => {
                    if (result.value) {
                        const params = {
                                id: this.recetaId
                            }
                        //enviar la peticion al servidor
                        axios.post(`/recetas/${this.recetaId}`, {params, _method:'delete'})
                            .then(respuesta => {
                                this.$swal({
                                    //Mensaje de confirmacion 
                                    title: '¡Receta Eliminada!',
                                    text: 'Correctamente',
                                    icon: 'success'
                                });
                                //eliminar del DOM
                                this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                            })
                            .catch(error => {
                                console.log(error);
                            })
                }
            })
        }
    }
}
</script>
