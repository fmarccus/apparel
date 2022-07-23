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
        Schema::create('apparels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->double('orig_quantity');
            $table->double('quantity');
            $table->double('purchasePrice');
            $table->double('retailPrice');
            $table->string('style');
            $table->string('type');
            $table->string('color');
            $table->string('image');
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
        Schema::dropIfExists('apparels');
    }
};
