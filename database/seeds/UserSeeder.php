<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Administrador',
            'email'=>'Admin@gmail.com',
            'password'=>'$2y$10$G.8JOsg5Rtj1L6QPFS.LNOhRro9PAr80bSy7PJxOp3fLHwbc3Hi.y',
            'role'=>'administrador'
        ]);
    }
}
