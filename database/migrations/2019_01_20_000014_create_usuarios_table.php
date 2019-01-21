<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'usuarios';

    /**
     * Run the migrations.
     * @table usuarios
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Cv_Usuario');
            $table->string('photo', 100);
            $table->string('nombre', 25);
            $table->string('apat', 15);
            $table->string('amat', 15)->nullable()->default(null);
            $table->integer('resultado')->unsigned();
            $table->string('correo', 35);
            $table->string('upassword', 25);
            $table->integer('ubicacion')->unsigned();
            $table->string('activo', 1);
            $table->integer('codigo')->nullable()->default(null)->unsigned();

            $table->index(["ubicacion"], 'Ubicacion');

            $table->index(["resultado"], 'Resultado');

            $table->index(["codigo"], 'Codigo');

            $table->unique(["correo"], 'Correo');


            $table->foreign('codigo', 'Codigo')
                ->references('Cv_Codigo')->on('codigos')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('resultado', 'Resultado')
                ->references('Cv_Resultado')->on('resultados')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('ubicacion', 'UUsuario')
                ->references('Cv_Ubicacion')->on('ubicaciones')
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
