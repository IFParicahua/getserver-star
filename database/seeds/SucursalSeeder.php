<?php

use Illuminate\Database\Seeder;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert([
            [
                'nombre'=>'Mercado Mutualista',
                'direccion'=>'Mecado Mutualista, tercer anillo externo'
            ],[
                'nombre'=>'Alemana',
                'direccion'=>'Avenida Alemana'
            ]
        ]);
    }
}
