<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemRestockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_restock', function (Blueprint $table) {
            $table->bigInteger('item_id')->unsigned();
            $table->bigInteger('restock_id')->unsigned();
            $table->smallInteger('qty');
            $table->timestamps();

            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade')->onUpdate('no action');;
            $table->foreign('restock_id')->references('id')->on('purchases')->onDelete('cascade')->onUpdate('no action');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_restock');
    }
}
