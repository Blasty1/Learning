<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('role')->default('user');
            $table->timestamps();
        });

        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('story')->nullable();
            $table->string('PathImage')->nullable();
            $table->string('razza');
            $table->string('classe');
            $table->integer('money');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');


        });

        Schema::create('stats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Forza');
            $table->string('Intelletto');
            $table->string('Destrezza');
            $table->string('Mira');
            $table->string('Ambizione');
            $table->unsignedBigInteger('id_personaggio');
            $table->foreign('id_personaggio')->references('id')->on('characters');
            $table->timestamps();
        });

        Schema::create('moneys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('money');
            $table->unsignedBigInteger('id_WhoPay');
            $table->unsignedBigInteger('id_WhoGet');
            $table->timestamps();

            $table->foreign('id_WhoPay')->references('id')->on('users');
            $table->foreign('id_WhoGet')->references('id')->on('users');

        });
        Schema::create('Piazza_chat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Text');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
