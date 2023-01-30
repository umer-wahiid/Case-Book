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
            $table->id();
            $table->string('lawyerid')->unique();
            $table->string('name');
            $table->string('fname')->nullable();
            $table->string('email')->unique();
            $table->biginteger('phone')->unique();
            $table->string('address',500)->nullable();
            $table->string('profile',1000)->nullable();
            $table->string('post')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('role');
            $table->string('password');
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
