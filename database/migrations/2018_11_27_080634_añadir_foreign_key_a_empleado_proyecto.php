<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AñadirForeignKeyAEmpleadoProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('empleado_proyecto', function($table) {
         $table->foreign('empleado_id')->references('id')->on('empleados');
         $table->foreign('proyecto_id')->references('id')->on('proyectos');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
