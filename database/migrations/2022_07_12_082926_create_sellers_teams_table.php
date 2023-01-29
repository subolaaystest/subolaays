<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers_teams', static function (Blueprint $table) {
            $table->id();
            $table->integer('seller_id')->nullable();
            $table->string('name', 300)->nullable();
            $table->string('mobile', 30)->nullable();
            $table->string('email', 300)->nullable();
            $table->enum('status', ['active', 'not_active'])->default('not_active');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('sellers_teams');
    }
}
