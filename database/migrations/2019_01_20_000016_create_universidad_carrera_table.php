<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversidadCarreraTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'universidad_carrera';

    /**
     * Run the migrations.
     * @table universidad_carrera
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('Universidad')->unsigned();
            $table->integer('Carrera')->unsigned();

            $table->index(["Carrera"], 'Carrera');

            $table->index(["Universidad"], 'Universidad');


            $table->foreign('Universidad', 'Universidad')
                ->references('Cv_Universidad')->on('universidades')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Carrera', 'Carrera')
                ->references('Cv_Carrera')->on('carreras')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
