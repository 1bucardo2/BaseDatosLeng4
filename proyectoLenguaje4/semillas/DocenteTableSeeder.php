<?php

use Illuminate\Database\Seeder;

class DocenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Docente::class, 100)->create(); 
    }
}
