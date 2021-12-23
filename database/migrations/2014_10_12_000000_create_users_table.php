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
            $table->string('fName')->nullable();
            $table->string('mName')->nullable();
            $table->string('lName')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('residArea')->nullable();
            $table->string('gender')->nullable();
            $table->string('course')->nullable();
            $table->string('amount')->nullable();
            $table->string('transId')->nullable();
            $table->string('transStatus')->nullable();
            $table->string('role')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
