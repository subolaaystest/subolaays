<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', static function (Blueprint $table) {
            $table->id();
            $table->integer('rank_id')->nullable();
            $table->integer('buyer_category_id')->nullable();
            $table->integer('orders_count')->default(0);
            $table->string('name', 300)->nullable();
            $table->string('mobile', 30)->nullable();
            $table->string('email', 300)->nullable();
            $table->string('otp_code')->nullable();
            $table->integer('verified')->default(0);
            $table->date('verification_date')->nullable();
            $table->string('license', 300)->nullable();
            $table->string('address', 300)->nullable();
            $table->string('latitude', 100)->nullable();
            $table->string('longitude', 100)->nullable();
            $table->string('password')->nullable();
            $table->string('image_profile', 300)->nullable();
            $table->string('whatsapp', 300)->nullable();
            $table->string('facebook', 300)->nullable();
            $table->string('twitter', 300)->nullable();
            $table->string('instagram', 300)->nullable();
            $table->string('tiktok', 300)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('buyers');
    }
}
