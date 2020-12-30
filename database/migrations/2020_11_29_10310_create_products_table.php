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
            $table->unsignedBigInteger('productline_id')->nullable();
            $table->string('Name', 255);
            $table->string('vendor', 255);
            $table->string('pdtdescription', 255);
            $table->integer('QtyinStock')->default(0);
            $table->decimal('amount', 19, 0);
            $table->timestamps();

            $table->foreign('productline_id')->references('id')->on('productlines');
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
