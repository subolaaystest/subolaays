<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers_storages', static function (Blueprint $table) {
            $table->id();
            $table->integer('seller_id')->default(0);
            $table->string('storage_type', 300)->nullable();
            $table->string('name', 300)->nullable();
            $table->integer('city_id')->nullable();
            $table->string('address', 300)->nullable();
            $table->string('latitude', 100)->nullable();
            $table->string('longitude', 100)->nullable();
            $table->string('postal_code', 50)->nullable();
            $table->string('street', 300)->nullable();
            $table->string('building', 300)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('mobile', 50)->nullable();
            $table->string('whatsapp', 50)->nullable();
            $table->string('preparing_time', 300)->nullable();
            $table->integer('is_default')->default(0);
            $table->enum('status', ['active', 'not_active'])->default('active');
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
        Schema::dropIfExists('sellers_storages');
    }
}
