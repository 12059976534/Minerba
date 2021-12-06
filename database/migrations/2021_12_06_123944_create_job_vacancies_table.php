<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255)->unique();
            $table->string('position', 100);
            $table->longText('job_requirement');
            $table->longText('job_description');
            $table->string('email', 255);
            $table->bigInteger('province_id');
            $table->bigInteger('city_id');
            $table->bigInteger('subdistrict_id');
            $table->timestamp('expired_at');
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
        Schema::dropIfExists('job_vacancies');
    }
}
