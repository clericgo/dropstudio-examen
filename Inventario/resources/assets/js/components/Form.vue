<template>
    <div class="container" >
        <div class="row justify-content-center">
            <button type="button" id="button" onClick="" class="btn primary" style="margin:2.5%;">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Nuevo Producto
            </button>
            <table class="table table-bordered">
                <tr>
                    <th>SKU</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
                <tr>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>

    export default {
        data(){
            return{
                arrayProductos : [],
                productoCalificacion: '5'            
            }
        },
        methods:{
            listarProductos(){
                let me = this;
                axios.get('/producto').then(function(response){
                    me.arrayProductos = response.data;
                    //console.log(response.data);
                }).catch(function(error){
                    console.log(error);
                });
            }
        },
        mounted() {
            this.listarProductos();
        }
    }
</script>
