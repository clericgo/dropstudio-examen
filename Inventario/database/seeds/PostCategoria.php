<?php

use Illuminate\Database\Seeder;

class PostCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = 
        [
            [
                'nombre' => 'relojes',
                'descripcion' => 'accesorios de tiempo funcionales'
            ],
            [
                'nombre' => 'celulares',
                'descripcion' => 'dispositivos electronicos multi-funcionales y portatiles'
            ],
            [
                'nombre' => 'tabletas',
                'descripcion' => 'dispositivos electronicos multi-funcionales de gran tamaño'
            ]
        ];
        DB::table('categorias')->insert($data);
    }
}
