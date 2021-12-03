<?php

use Illuminate\Database\Seeder;

class GradoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Grado::class, 100)->create(); 
    }
}
