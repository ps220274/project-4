<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBesteldeIngrediëntensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bestelde_ingrediëntens', function (Blueprint $table) {
            $table->id();
            $table->integer('ingrediënt_id');
            $table->integer('bestelling_id');
            $table->integer('pizza_id');
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
        Schema::dropIfExists('bestelde_ingrediëntens');
    }
}
