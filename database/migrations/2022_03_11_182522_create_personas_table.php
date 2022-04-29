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
        Schema::create('personas', function (Blueprint $table) {
            $table->string("doc", 20);
            $table->primary('doc');
            $table->string("nombre", 50);
            $table->string("apellido", 50);
            $table->string("telefono", 15);
            $table->string("direccion", 50);
            $table->string("correo");
            $table->foreign("correo")->references("email")->on("users");
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
        Schema::dropIfExists('personas');
    }
};
