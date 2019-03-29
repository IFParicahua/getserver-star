<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Jose',
                'nit'=>'8599622265',
                'email'=>'Jose@gmail.com',
                'direccion'=>'Calle los guapos esq. los monos'
            ],[
                'nombre'=>'Andrea',
                'nit'=>'9099622867',
                'email'=>'Andrea@gmail.com',
                'direccion'=>'Calle los guapos esq. los monos'
            ]
        ]);
    }
}
