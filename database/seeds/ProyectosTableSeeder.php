<?php

use Illuminate\Database\Seeder;

class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 0; $i < 10; $i++){
        DB::table('proyectos')->insert([
          'nombre'=>'proyecto'.$i,
          'titulo'=> 'titulo'.$i,
          'horasestimadas'=>random_int(0,10),
          'empleado_id' => random_int(1,9)
        ]);
      }
    }
}
