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
            $table->increments('id');
            $table->string('employeeid','150')->nullable()->unique();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('firstname','200');
            $table->string('middlename','100')->nullable();
            $table->string('lastname','200')->nullable();
            $table->string('contact')->nullable()->unique();
            $table->string('address','250')->nullable();
            $table->string('gender','100')->nullable();
            $table->string('designation')->nullable();
            $table->string('user_type','100')->nullable();


            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->binary('status')->nullable();
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
