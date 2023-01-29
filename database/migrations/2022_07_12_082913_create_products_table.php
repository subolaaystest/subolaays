<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', static function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['offer_request', 'stories', 'deals'])->nullable();
            $table->integer('deal_id')->nullable();
            $table->integer('seller_id')->default(0);
            $table->integer('main_category_id')->default(0);
            $table->integer('sub_category_id')->default(0);
            $table->double('price')->nullable();
            $table->integer('size')->nullable();
            $table->double('discount_percentage')->nullable();
            $table->double('offer_price')->nullable();
            $table->integer('trademark_id')->nullable();
            $table->string('sku', 150)->nullable();
            $table->integer('views_count')->default(0);
            $table->integer('quantity_available')->default(0);
            $table->integer('quantity_sell')->default(0);
            $table->integer('count_alert')->nullable();
            $table->integer('minimum_order')->nullable();
            $table->enum('taxable', ['yes', 'no'])->nullable();
            $table->enum('approve_status', ['waiting', 'approve', 'rejected'])->default('waiting');
            $table->dateTime('approve_time')->nullable();
            $table->string('status', 15)->default('active')->comment("active/not_active");
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
        Schema::dropIfExists('products');
    }
}
