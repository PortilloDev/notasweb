<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceToolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_tool', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('experience_id')->unsigned();
            $table->unsignedBigInteger('tool_id')->unsigned();

            
            //Relation
            $table->foreign('experience_id')->references('id')->on('experiences')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('tool_id')->references('id')->on('tools')
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
        Schema::dropIfExists('experience_tool');
    }
}
