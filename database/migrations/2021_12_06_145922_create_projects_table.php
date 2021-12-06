<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 255);
            $table->longText('job_field');
            $table->timestamp('start_at');
            $table->timestamp('end_at');
            $table->bigInteger('province_id');
            $table->bigInteger('city_id');
            $table->bigInteger('subdistrict_id');
            $table->bigInteger('urban_village_id');
            $table->bigInteger('company_id');
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
        Schema::dropIfExists('projects');
    }
}
