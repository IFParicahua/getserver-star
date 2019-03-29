<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            ['nombre'=>'Leche',
                'descripcion'=>'Bebida Lactea',
                'precio'=>'12.36'
            ],[
                'nombre'=>'Yogurt',
                'descripcion'=>'Producto Lactea',
                'precio'=>'8.00'
            ],[
                'nombre'=>'Mortadela',
                'descripcion'=>'Embutidos',
                'precio'=>'6.00'
            ],[
                'nombre'=>'Salchicha',
                'descripcion'=>'Embutido',
                'precio'=>'15.00'
            ],[
                'nombre'=>'Galleta Integral',
                'descripcion'=>'Galletas',
                'precio'=>'8.00'
            ]
        ]);
    }
}
