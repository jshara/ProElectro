<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('item_id');
            $table->string('item_name');
            $table->string('item_desc');
            $table->string('item_pic');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('cat_id');
            $table->timestamps();
        });

        Schema::table('items', function (Blueprint $table){
            $table->foreign('brand_id')->references('brand_id')->on('brands');
        });

        Schema::table('items', function (Blueprint $table){
            $table->foreign('cat_id')->references('cat_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
