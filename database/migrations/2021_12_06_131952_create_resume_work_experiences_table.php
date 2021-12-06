<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_work_experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('resume_id');
            $table->string('company_name', 255);
            $table->string('position', 100);
            $table->timestamp('start_at');
            $table->timestamp('end_at')->nullable();
            $table->tinyInteger('is_certified')->default('0');
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
        Schema::dropIfExists('resume_work_experiences');
    }
}
