<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsSmartsPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_smarts_prices', static function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->default(0);
            $table->integer('from_quantity')->nullable();
            $table->integer('to_quantity')->nullable();
            $table->double('price')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_smarts_prices');
    }
}
