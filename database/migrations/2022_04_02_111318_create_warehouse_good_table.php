<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseGoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_good', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warehouse_Id');
            $table->foreign('warehouse_Id')->references('id')->on('warehouses');
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
        Schema::dropIfExists('warehouse_good');
    }
}
