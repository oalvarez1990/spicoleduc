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
        Schema::create('asignature_student', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asignature_id')
                ->nullable()
                ->constrained('asignatures')
                ->nullOnDelete()
                ->onUpdate('cascade');

            $table->foreignId('student_id')
                ->nullable()
                ->constrained('students')
                ->nullOnDelete()
                ->onUpdate('cascade');                
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
        Schema::dropIfExists('asignature_student');
    }
};
