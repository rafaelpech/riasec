<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'carreras';

    /**
     * Run the migrations.
     * @table carreras
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Cv_Carrera');
            $table->string('carrera', 80);
            $table->integer('nivel')->unsigned();
            $table->integer('combinacion')->unsigned();

            $table->index(["nivel"], 'Nivel');

            $table->index(["combinacion"], 'Combinacion');


            $table->foreign('combinacion', 'CCarrera')
                ->references('Cv_Combinacion')->on('combinaciones')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('nivel', 'NCarrera')
                ->references('Cv_Nivel')->on('niveles')
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
