<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();         
            $table->string('typeDocument');
            $table->integer('document');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('firstSurname');
            $table->string('secondSurname');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('city');            
            $table->string('semester');
            $table->string('sex');
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
        Schema::dropIfExists('students');
    }
};
