<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 0; $i < 10; $i++){
        DB::table('empleados')->insert([
          'nombre'=>'empleado'.$i,
          'apellido1'=> 'apellido1-'.$i,
          'apellido2'=> 'apellido2-'.$i,
          'email'=>'email'.$i,
          'telefono'=>'telefono'.$i,
          'departamento_id'=>random_int(1,9)
        ]);
      }
    }
}
