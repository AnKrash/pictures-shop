<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('basket_picture');
        Schema::create('basket_picture', function (Blueprint $table) {

            $table->unsignedBigInteger('basket_id');
            $table->unsignedBigInteger('picture_id');
            $table->unsignedTinyInteger('quantity');

            $table->foreign('basket_id')
                ->references('id')
                ->on('baskets')
                ->cascadeOnDelete();
            $table->foreign('product_id')
                ->references('id')
                ->on('pictures')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basket_picture');
    }
}
