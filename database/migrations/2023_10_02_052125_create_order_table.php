<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        /**
         * TABLE ORDERS TIDAK BISA SIMPAN ORDER_ITEMS SEBAGAI SALAH SATU KOLOMNYA.
         * UNTUK MENGAMBIL ORDER_ITEMS, LAKUKAN:
         *     SELECT * FROM ORDER_ITEMS o WHERE o.ORDER_ID = ...
         */
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            // $table->unsignedBigInteger("item_id");
            $table->string("status");
            $table->dateTime("date");
            $table->double("total");

            $table->foreign("user_id")->references("id")->on("users");
            // $table->foreign("item_id")->references("id")->on("menu_items");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
