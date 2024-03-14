<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriaFillaToProductesTable extends Migration
{
    public function up()
    {
        Schema::table('productes', function (Blueprint $table) {
            $table->string('categoria_filla')->after('descripcio_categoria');
        });
    }

    public function down()
    {
        Schema::table('productes', function (Blueprint $table) {
            $table->dropColumn('categoria_filla');
        });
    }
}

