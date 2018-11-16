<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEmpleadoProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('empleado_proyecto', function (Blueprint $table) {
        $table->integer('empleado_id')->unsigned();
        $table->integer('proyecto_id')->unsigned();
        $table->date('fechainicio');
        $table->date('fechafin');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        chema::dropIfExists('empleado_proyecto');
    }
}
