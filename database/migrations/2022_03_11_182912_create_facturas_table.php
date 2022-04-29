<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->integer("id", 11);
            $table->string("doc_persona");
            $table->foreign("doc_persona")->references("doc")->on("personas");
            $table->integer("id_carrito");
            $table->foreign("id_carrito")->references("id")->on("carritos");
            $table->string("cantidad", 10);
            $table->float("precio_total");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
};
