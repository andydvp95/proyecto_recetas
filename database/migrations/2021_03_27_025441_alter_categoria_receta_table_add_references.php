<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCategoriaRecetaTableAddReferences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recetas', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users')->comment('El usuario que crea la receta')->after('imagen');
            $table->foreignId('categoria_id')->references('id')->on('categoria_recetas')->comment('La categoria de la receta')->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recetas', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('categoria_id');
        }); 
    }
}
