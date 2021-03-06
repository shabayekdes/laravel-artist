<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->integer('item_count');
            $table->decimal('grand_total', 12, 4)->default(0);
            $table->integer('payment_method')->comment("1- COD, 2- credit card, 3- paypal");
            $table->integer('payment_status')->default(1)->comment("1- Pending, 2- Paid");
            $table->integer('order_status')->default(1);
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('user_address_id')->references('id')->on('user_addresses');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
