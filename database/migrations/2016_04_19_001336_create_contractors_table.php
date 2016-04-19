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
            $table->timestamps();

            // Personal information
            $table->string('contractor_firstname');
            $table->string('contractor_lastname');
            $table->string('contractor_email');
            // $table->string('contractor_title');
            // $table->string('contractor_location');
            // $table->integer('contractor_zip');
            // $table->string('contractor_photo');
            // $table->string('contractor_tel');
            // $table->string('contractor_looking');

            // // Work/skills related
            // $table->text('contractor_links');
            // $table->text('contractor_description');
            // $table->string('contractor_resume');
            // $table->string('contractor_topskills');
            // $table->string('contractor_otherskills');
            // $table->text('contractor_github');
            // $table->string('github_lang')->default('0');
            // $table->text('contractor_stoodout')->nullable();

            // // Internal use
            // $table->integer('users_id')->unsigned()->unique();
            // $table->string('contractor_skill_name_1', 50)->default(null);
            // $table->integer('contractor_skill_score_1')->default(0);
            // $table->string('contractor_skill_name_2', 50)->default(null);
            // $table->integer('contractor_skill_score_2')->default(0);
            // $table->string('contractor_skill_name_3', 50)->default(null);
            // $table->integer('contractor_skill_score_3')->default(0);
            // $table->integer('has_score')->default(0);
            // $table->integer('general_score')->default(0);

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
