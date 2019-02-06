<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicacionesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ubicaciones';

    /**
     * Run the migrations.
     * @table ubicaciones
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Cv_Ubicacion');
            $table->integer('estado')->unsigned();
            $table->integer('municipio')->unsigned();

            $table->index(["estado"], 'Estado');

            $table->index(["municipio"], 'Municipio');


            $table->foreign('estado', 'Estado')
                ->references('Cv_Estado')->on('estados')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('municipio', 'Municipio')
                ->references('Cv_Municipio')->on('municipios')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
