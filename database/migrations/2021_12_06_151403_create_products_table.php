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
            $table->bigInteger('product_category_id')->nullable();
            $table->bigInteger('comodity_id');
            $table->string('slug', 255)->unique();
            $table->string('name', 255);
            $table->string('unit', 50)->nullable();
            $table->string('main_image', 100)->nullable();
            $table->decimal('price', 20, 3);
            $table->decimal('admin_fee', 20, 3);
            $table->decimal('selling_price', 20, 3);
            $table->longText('description')->nullable();
            $table->integer('views');
            $table->bigInteger('company_id');
            $table->tinyInteger('status')->default('1');
            $table->timestamps();
            $table->softDeletes();
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
