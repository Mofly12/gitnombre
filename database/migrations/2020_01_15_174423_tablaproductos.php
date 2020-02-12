<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tablaproductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Productos', function (Blueprint $table) {
            $table->string('nombre',100)->nullable();
            $table->float('precio',8,2)->nullable();
           $table->bigInteger('stock')->nullable();
           $table->string('img_path',300)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Productos', function (Blueprint $table) {
            $table->dropColumn(['nombre','precio','stock','img_path']);
        });
    }
}
