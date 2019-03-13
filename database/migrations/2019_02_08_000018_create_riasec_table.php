<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiasecTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'riasec';

    /**
     * Run the migrations.
     * @table riasec
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->tableName)) return;
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Cv_Avance');
            $table->integer('Usuario')->unsigned();
            $table->integer('Avance');
            $table->integer('R');
            $table->integer('I');
            $table->integer('A');
            $table->integer('S');
            $table->integer('E');
            $table->integer('C');

            $table->index(["Usuario"], 'Usuario');


            $table->foreign('Usuario', 'URiasec')
                ->references('Cv_Usuario')->on('usuarios')
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
        Schema::dropIfExists($this->tableName);
    }
}
