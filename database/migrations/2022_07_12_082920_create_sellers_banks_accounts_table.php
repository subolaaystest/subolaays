<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersBanksAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers_banks_accounts', static function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seller_id')->default(0);
            $table->integer('bank_id')->default(0);
            $table->string('account_name', 300)->nullable();
            $table->string('account_number', 100)->nullable();
            $table->string('iban', 100)->nullable();
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
        Schema::dropIfExists('sellers_banks_accounts');
    }
}
