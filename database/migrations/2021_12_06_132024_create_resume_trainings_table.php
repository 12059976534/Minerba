<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_trainings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('resume_id');
            $table->string('name', 255);
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
        Schema::dropIfExists('resume_trainings');
    }
}
