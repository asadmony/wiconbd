<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productcode', 255)->unique();
            $table->string('productname', 255);
            $table->text('description');
            $table->string('brand', 255);
            $table->string('category', 255);
            $table->integer('price');
            $table->float('discount')->default(0);
            $table->integer('discountprice')->nullable();
            $table->boolean('available')->nullable()->default(true);
            $table->boolean('visibility')->nullable()->default(true);
            $table->integer('quantity');
            $table->timestamps();
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
