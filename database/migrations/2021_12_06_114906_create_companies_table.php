<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255)->unique();
            $table->string('name', 255);
            $table->string('category', 255)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('npwp', 20)->nullable();
            $table->string('nib', 15)->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('address', 255);
            $table->bigInteger('city_id')->nullable();
            $table->text('description')->nullable();
            $table->string('image', 100)->nullable();
            $table->tinyInteger('is_verified')->default('0');
            $table->timestamp('verified_at')->nullable();
            $table->bigInteger('verified_by')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
