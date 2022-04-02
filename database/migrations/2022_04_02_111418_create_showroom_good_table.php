<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowroomGoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showroom_good', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('showroom_Id');
            $table->foreign('showroom_Id')->references('id')->on('showrooms');
            $table->unsignedBigInteger('good_Id');
            $table->foreign('good_Id')->references('id')->on('goods');
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
        Schema::dropIfExists('showroom_good');
    }
}
