<?php

use Illuminate\Database\Seeder;

class PostProducto extends Seeder
{
    public function run()
    {
        $data = 
        [
            [
                'sku' => 'APLWS601',
                'nombre' => 'Apple Watch Series 6',
                'id_categoria' => 1,
                'descripcion' => 'Novedoso Dispositivo capaz de generar funciones diarias como administrar, tiempo, salud y multimedias. 

                Version Series 6',
                'precio' => 6500,
                'cantidad' => 5,
                'estado' => 0,
                'eliminacion' => 0,
                'calificacion' => 0
            ],
            [
                'sku' => 'APLWS501',
                'nombre' => 'Apple Watch Series 5',
                'id_categoria' => 1,
                'descripcion' => 'Novedoso Dispositivo capaz de generar funciones diarias como administrar, tiempo, salud y multimedias. 

                Version Series 5',
                'precio' => 5000,
                'cantidad' => 8,
                'estado' => 0,
                'eliminacion' => 0,
                'calificacion' => 0
            ],
            [
                'sku' => 'APLWS401',
                'nombre' => 'Apple Watch Series 4',
                'id_categoria' => 1,
                'descripcion' => 'Novedoso Dispositivo capaz de generar funciones diarias como administrar, tiempo, salud y multimedias. 

                Version Series 4',
                'precio' => 3000,
                'cantidad' => 2,
                'estado' => 0,
                'eliminacion' => 0,
                'calificacion' => 0
            ]
        ];
        DB::table('productos')->insert($data);
    }
}
