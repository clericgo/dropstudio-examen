<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Examen DropStudio</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <!-- Icons -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body
            {
                background-color: #f8f8f8;
            }

            .layout
            {
                background-color: #fff;
                border-radius: 5px 5px 5px 5px;
                -webkit-border-radius: 5px 5px 5px 5px;
                -moz-border-radius: 5px 5px 5px 5px;
                padding: 20px;
                margin: 1.5%;
            }

            .primary
            {
                background-color: #7367F0;
                color: #fff;
            }
            .default
            {
                background-color: #f8f8f8;
                color: #000;
            }

            .text-primary
            {
                color: #7367F0;
            }
            .text-second
            {
                color: #4ED089;
            }

            .border-radius
            {
                -webkit-border-radius: 25px;
                -moz-border-radius: 25px;
                border-radius: 25px;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <button type="button" id="button" onClick="irUrl()" class="btn primary" style="margin:2.5%;">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </button>
            <span class="text-primary" id="texto" style="margin-left: -2%">Inventario</span>
            <div id="structure">
                <layout></layout>
                <form></form>
            </div>
        </div>
        <!-- Modal -->
            <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Descripcion:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                    </div>
                </div>
                </div>
    </body>
    <script src="js/app.js"></script>
    <script>
        function irUrl(){
            window.location.href = '/nuevoProducto';
        }
    </script>
</html>
