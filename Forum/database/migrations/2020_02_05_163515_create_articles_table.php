<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id'); //id table
            $table->string('ArticleName'); //Name of article
            $table->string('ArticlePreface'); //breve input dell'articolo
            $table->string('ArticlePathImage'); //path of image 
            $table->string('ArticlePathFiletext'); //path of filetext
            $table->string('Approved')->default('No');
            $table->unsignedBigInteger('user_id'); //id of user, foreign key 
            $table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
