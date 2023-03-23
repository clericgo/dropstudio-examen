<template>
    <div class="container" >
        <div class="row justify-content-center">
            <div class="container layout" v-for="producto in arrayProductos" :key="producto.id">
                <div class="row">    
                    <div class="col-sm">
                        <img src="img/APW6.jpg" width="45%">
                    </div>
                    <div class="col-sm">
                        <div v-text="producto.nombre"></div>
                        <div class="text-primary">By Apple</div>
                        {{producto.calificacion}}
                        <div v-switch="producto.calificacion">
                            <div v-default>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div v-case="'0'">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div v-case="'1'">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div v-case="'2'">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div v-case="'3'">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div v-case="'4'">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div v-case="5">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="text-second">In Stock</div>
                        <div v-text="producto.cantidad"></div> 
                    </div>
                    <div class="col-sm" style="border-left: solid 4px #f8f8f8;">
                        <div class="text-primary" v-text="'$' + producto.precio" style="text-align: center;"></div>
                        <div style="background-color: #E5F8ED; text-align: center; width:30%; margin-left: 35%">
                            <div v-if="producto.estado === 0">
                                <span class="text-second border-radius" style="font-size: 0.8em">Disponible</span>
                            </div>
                            <div v-else-if="producto.estado === 1">
                                <span></span>
                            </div>
                        </div>
                        <div>
                            <button type="button" @click="eliminarProducto(producto.id)" class="btn default" style="width: 90%; margin: 5%;">
                                <i class="fa fa-close"></i>
                                <span>Eliminar</span>
                            </button>
                        </div>
                        <div>
                            <button type="button" @click="calificarProducto(producto.id)" class="btn primary" style="width: 90%; margin: 5%;">
                                <i class="fa fa-heart-o"></i>
                                <span>Calificar</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data(){
            return{
                arrayProductos : []
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
            },
            eliminarProducto(id_producto){
                let me = this;
                let text;
                if (confirm("Seguro desea Eliminar") == true) {
                    axios.put('/producto/eliminar', 
                    {
                        'id' : id_producto,
                        'eliminacion' : 1
                    }).then(function (){
                        location.reload();
                    }).catch(function(error){
                        console.log(error);
                    });
                }
                
            },
            calificarProducto(id_producto){
                let me = this;
                axios.post('/producto/calificar', 
                {
                    'id' : id_producto,
                    'calificacion' : 3
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
