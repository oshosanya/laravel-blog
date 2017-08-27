<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            //$table->increments('id');
            $table->uuid('id');
            $table->primary('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('surname');
            $table->string('first_name');
            $table->string('other_name');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('phone_number');
            $table->string('alt_phone_number');
            $table->string('home_address');
            $table->string('class');
            $table->string('department');
            $table->string('school_name');
            $table->string('school_address');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
