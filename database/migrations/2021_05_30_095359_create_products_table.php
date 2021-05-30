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
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('short_description')->nullable();
            $table->text('description');
            $table->decimal('regular_price');
            $table->decimal("sale_price")->nullable();
            $table->enum('size',['XS','S','M','L','XL']);
            $table->enum('stock_status',['instock','outofstock']);
            $table->unsignedBigInteger('quantity')->default(10);
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->enum('product_status',['ensolde','standard']);
            $table->enum('product_category',['men','women']);
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
