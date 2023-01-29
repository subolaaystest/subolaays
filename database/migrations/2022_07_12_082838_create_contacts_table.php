<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', static function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default(0);
            $table->enum('message_type', ['general', 'problem', 'suggestion']);
            $table->string('name', 300)->nullable();
            $table->string('email', 300)->nullable();
            $table->string('mobile', 300)->nullable();
            $table->string('title', 300);
            $table->text('message');
            $table->text('replay')->nullable();
            $table->integer('read')->default(0);
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
        Schema::dropIfExists('contacts');
    }
}
