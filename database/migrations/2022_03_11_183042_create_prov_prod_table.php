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
        Schema::create('prod_prov', function (Blueprint $table) {
            $table->integer("id_prov_producto", 11);
            $table->string("NIF");
            $table->foreign("NIF")->references("NIF")->on("proveedors");
            $table->integer("id_producto");
            $table->foreign("id_producto")->references("id")->on("productos");   
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
        Schema::dropIfExists('prov_prod');
    }
};
