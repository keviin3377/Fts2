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
        Schema::create('carritos', function (Blueprint $table) {
            $table->integer("id", 11);
            $table->integer("id_producto");
            $table->foreign("id_producto")->references("id")->on("productos");
            $table->integer("cantidad");
            $table->float("precio_unidad");
            $table->float("precio_total");
            $table->timestamps();
        });
    }


    $sql = "CREATE TABLE carritos (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        id_producto INT NOT NULL ,
        FOREIGN KEY (id_producto) REFERENCES 'id' (productos),
        cantidad INT NOT NULL,
        precio_unidad FLOAT NOT NULL,
        precio_total FLOAT NOT NULL
        
    )"
    
 




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carritos');
    }
};
