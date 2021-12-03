<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(table_Seeder_Ciudad::class);
        //$this->call(table_Seeder_Profesor::class);
      //  $this->call(table_Seeder_Estudiante::class);

     // $this->call(DepartamentoTableSeeder::class);
     // $this->call(UniversidadTableSeeder::class);

     $this->call(DocenteTableSeeder::class);
     $this->call(AlumnoTableSeeder::class);
     $this->call(GradoTableSeeder::class);
    }
}
