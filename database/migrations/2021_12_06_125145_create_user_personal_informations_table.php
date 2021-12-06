<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPersonalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_personal_informations', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id', 50)->unique();
            $table->string('address', 255);
            $table->bigInteger('province_id');
            $table->bigInteger('city_id');
            $table->bigInteger('subdistrict_id');
            $table->bigInteger('urban_village_id');
            $table->string('postal_code', 5);
            $table->bigInteger('education_id')->nullable();
            $table->string('major', 100)->nullable();
            $table->string('university', 255)->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('image', 100)->nullable();
            $table->bigInteger('user_id');
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
        Schema::dropIfExists('user_personal_informations');
    }
}
