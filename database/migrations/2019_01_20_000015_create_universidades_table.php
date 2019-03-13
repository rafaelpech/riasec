<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversidadesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'universidades';

    /**
     * Run the migrations.
     * @table universidades
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Cv_Universidad');
            $table->string('photo', 100);
            $table->string('nogeneral', 25);
            $table->string('correo', 75);
            $table->string('upassword', 100);
            $table->string('nombreuniversidad', 40);
            $table->integer('contacto')->unsigned();
            $table->integer('ubicacion')->unsigned();

            $table->index(["ubicacion"], 'Ubicacion');

            $table->index(["contacto"], 'Contacto');

            $table->unique(["nogeneral"], 'NoGeneral');


            $table->foreign('contacto', 'Contacto')
                ->references('Cv_Contacto')->on('contactos')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('ubicacion', 'UUniversidad')
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
