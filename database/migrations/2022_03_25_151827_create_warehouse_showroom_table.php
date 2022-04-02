<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseShowroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_showroom', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warehouse_Id');
            $table->foreign('warehouse_Id')->references('id')->on('warehouses');
            $table->unsignedBigInteger('showroom_Id');
            $table->foreign('showroom_Id')->references('id')->on('showrooms');
            $table->integer('distance');
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
        Schema::dropIfExists('warehouse_showroom');
    }
}
