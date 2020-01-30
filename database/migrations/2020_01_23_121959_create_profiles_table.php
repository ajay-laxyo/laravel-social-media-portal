<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('about_u');
            $table->string('dob');
            $table->string('gender');
            $table->string('mobile');
            $table->string('alt_number');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('school');
            $table->string('college');
            $table->string('university');
            $table->string('designation');
            $table->string('work_at');
            $table->string('language');
            $table->string('religion');
            $table->text('pro_pic');
            $table->text('cover_pic');
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
        Schema::dropIfExists('profiles');
    }
}
