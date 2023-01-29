<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersAreasPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers_areas_points', static function (Blueprint $table) {
            $table->id();
            $table->integer('seller_id')->default(0);
            $table->string('address', 300)->nullable();
            $table->string('latitude', 100)->nullable();
            $table->string('longitude', 100)->nullable();
            $table->string('zone_size', 300)->nullable();
            $table->integer('city_id')->nullable();
            $table->string('district', 300)->nullable();
            $table->string('postal_code', 50)->nullable();
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
        Schema::dropIfExists('sellers_areas_points');
    }
}
