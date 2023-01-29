<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_message', static function (Blueprint $table) {
            $table->id();
            $table->integer('chat_id')->nullable();
            $table->integer('sender_id')->default(0);
            $table->text('message')->nullable();
            $table->integer('read_at')->default(0)->comment("0 notfreez, 1freez");
            $table->integer('type')->default(0)->comment("0 text, 1 image");
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
        Schema::dropIfExists('chat_message');
    }
}
