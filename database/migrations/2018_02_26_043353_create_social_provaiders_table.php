<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialProvaidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_provaiders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->string('provaider_id');
            $table->string('provaider');
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
        Schema::dropIfExists('social_provaiders');
    }
}
