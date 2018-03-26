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
            $table->string('first');
            $table->string('last')->nullable();
            $table->string('email')->unique();
            $table->string('dob');
            $table->integer('phone')->unique();
            $table->string('addr_one');
            $table->string('addr_two');
            $table->integer('pincode');
            $table->enum('role', ['normal', 'admin','admin_rest'])->default('normal');    
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
