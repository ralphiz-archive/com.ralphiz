<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();

            // Personal information
            $table->string('title');
            $table->string('city');
            $table->string('state');
            $table->string('postcode');
            $table->string('country');
            $table->string('photo');
            $table->string('tel');
            $table->boolean('looking');

            // Work/skills related
            $table->text('links');
            $table->text('description');
            $table->string('resume');
            $table->string('topskills');
            $table->string('otherskills');
            $table->text('github');
            $table->string('github_lang')->default('0');
            $table->text('stoodout')->nullable();

            // Internal use
            $table->string('skill1', 50)->default(null);
            $table->integer('score1')->default(0);
            $table->string('skill2', 50)->default(null);
            $table->integer('score2')->default(0);
            $table->string('skill3', 50)->default(null);
            $table->integer('score3')->default(0);
            $table->boolean('has_score')->default(false);
            $table->integer('general_score')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contractors');
    }
}
