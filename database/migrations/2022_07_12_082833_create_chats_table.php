<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', static function (Blueprint $table) {
            $table->id();
            $table->integer('seller_id')->nullable();
            $table->integer('buyer_id')->default(0);
            $table->enum('type', ['deals', 'offers'])->nullable();
            $table->integer('delete')->default(0);
            $table->integer('freez')->default(0)->comment("0 notfreez, 1freez");
            $table->timestamp('last_seen')->nullable();
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
        Schema::dropIfExists('chats');
    }
}
