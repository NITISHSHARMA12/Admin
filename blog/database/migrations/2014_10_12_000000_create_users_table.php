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
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('dob')->nullable();
            $table->integer('phone')->nullable();
            $table->string('addr_one')->nullable();
            $table->string('addr_two')->nullable();
            $table->integer('pincode')->nullable();
            $table->enum('role', ['normal', 'admin','admin_rest'])->default('normal')->nullable();   
            $table->string('password');
            $table->enum('status', ['Disabled', 'Enabled'])->default('Enabled');    
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
