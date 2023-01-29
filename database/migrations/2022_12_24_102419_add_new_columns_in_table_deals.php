<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsInTableDeals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deals', function (Blueprint $table) {

            $table->dateTime('delivery_date')->nullable();
            $table->string('delivery_time')->nullable();
            $table->integer('duration_receiving_offers')->nullable();
            $table->text('notes')->nullable();
            $table->foreignId('buyer_address_id')->nullable()->constrained('buyers_addresses')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deals', function (Blueprint $table) {
            //
        });
    }
}
