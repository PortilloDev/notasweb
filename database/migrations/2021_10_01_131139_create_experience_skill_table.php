<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_skill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('experience_id')->unsigned();
            $table->unsignedBigInteger('skill_id')->unsigned();

            
            //Relation
            $table->foreign('experience_id')->references('id')->on('experiences')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('skill_id')->references('id')->on('skills')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('experience_skill');
    }
}
