<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Post;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned(); //post pertenece solo ha un usuario
            $table->unsignedBigInteger('category_id')->unsigned();

            $table->string('name', 128);
            $table->string('slug', 128)->unique();

            $table->text('excerpt')->nullable();
            $table->text('body');
            $table->enum('status', [Post::PUBLISHED, Post::DRAFT])->default(Post::DRAFT);

            $table->string('file', 128)->nullable();


            //Relation
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')
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
        Schema::dropIfExists('posts');
    }
}
