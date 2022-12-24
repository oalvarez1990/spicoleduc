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
        Schema::create('asignatures', function (Blueprint $table) {
            $table->id();
            $table->string('nameAsignature');
            $table->integer('codeAsignature');
            $table->string('description');
            $table->integer('credits');          
            $table->string('knowledgeArea');
            $table->string('elective');
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
        Schema::dropIfExists('asignatures');
    }
};
