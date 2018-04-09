<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('listings');
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->longtext('description')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->integer('for_sale')->default(1);
            $table->integer('for_rent')->default(1);
            $table->decimal('sale', 10, 2)->nullable();
            $table->decimal('rent', 10, 2)->nullable();
            $table->boolean('web_visible')->default(1);
            $table->boolean('featured')->default(0);
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
        Schema::dropIfExists('listings');
    }
}
