<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalidadesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'personalidades';

    /**
     * Run the migrations.
     * @table personalidades
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('cv_personalidad');
            $table->string('clave', 1);
            $table->string('descripcion', 50);
            $table->integer('preferencia')->unsigned();

            $table->index(["preferencia"], 'preferencia');


            $table->foreign('preferencia', 'preferencia')
                ->references('cv_preferencia')->on('preferencias')
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
