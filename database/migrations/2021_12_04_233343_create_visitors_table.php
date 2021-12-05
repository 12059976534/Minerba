<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address');
            $table->string('country_name', 255)->nullable();
            $table->string('country_code')->nullable();
            $table->string('region_code')->nullable();
            $table->string('region_name', 255)->nullable();
            $table->string('city_name', 255)->nullable();
            $table->string('zip_code')->nullable();
            $table->string('iso_code')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('metro_code')->nullable();
            $table->string('area_code')->nullable();
            $table->string('device')->nullable();
            $table->string('device_name')->nullable();
            $table->string('platform')->nullable();
            $table->string('platform_version')->nullable();
            $table->string('browser')->nullable();
            $table->string('browser_version')->nullable();
            $table->timestamp('last_visited_at')->nullable();
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
        Schema::dropIfExists('visitors');
    }
}
