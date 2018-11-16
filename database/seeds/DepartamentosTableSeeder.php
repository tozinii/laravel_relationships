<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 0; $i < 10; $i++){
        DB::table('departamentos')->insert([
          'nombre'=>'departamento'.$i,
          'codigo'=> 'cod'.$i,
          'nombre'=>'departamento'.$i
        ]);
      }
    }
}
