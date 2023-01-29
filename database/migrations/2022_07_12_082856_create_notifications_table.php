<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', static function (Blueprint $table) {
            $table->id();
            $table->integer('from_admin_dashboard')->default(0);
            $table->string('random_key', 100)->nullable();
            $table->integer('user_id');
            $table->enum('user_type', ['seller', 'buyer'])->nullable();
            $table->string('tag', 100)->default('order');
            $table->integer('tag_id')->default(0);
            $table->text('message');
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
        Schema::dropIfExists('notifications');
    }
}
