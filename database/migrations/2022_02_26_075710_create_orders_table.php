<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('user_id');
            $table->float('total_price');
            //Each table needs CRUD , so assume this table only can update delivery address (default is user address)
            $table->string('delivery_address');
            $table->enum('status', ['ordered', 'delivered', 'cancelled'])->default('ordered');
            $table->timestamp('order_date')->useCurrent = true;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
};