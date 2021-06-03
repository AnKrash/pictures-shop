<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pictures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('picture_id')->unsigned()->nullable();
            $table->tinyInteger('quantity')->unsigned()->default(1);
            $table->timestamps();

            // внешний ключ, ссылается на поле id таблицы orders
            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->restrictOnDelete();
            // внешний ключ, ссылается на поле id таблицы products
            $table->foreign('picture_id')
                ->references('id')
                ->on('pictures')
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_pictures');
    }
}
