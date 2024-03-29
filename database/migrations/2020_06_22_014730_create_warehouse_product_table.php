<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_product', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('warehouse_id');
          $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('cascade');
          $table->unsignedBigInteger('product_id');
          $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
          $table->smallInteger('quantity');
          $table->smallInteger('quantity-in')->default(0);
          $table->smallInteger('quantity-out')->default(0);
          $table->string('statut')->default('pending');
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
        Schema::dropIfExists('warehouse_product');
    }
}
