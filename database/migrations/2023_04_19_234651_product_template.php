<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductTemplate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_template', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            //$table->foreignId('type_id')->constrained()->references('id')->on('type');
            //$table->foreignId('type_id')->constrained();
            $table->string('name')->unique();
            $table->string('description',244);
            $table->decimal('price');
            $table->integer('quantity');
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
        //
    }
}
