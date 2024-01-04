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
            $table->bigIncrements('id');
            $table->string('student_code',10)->unique();
            $table->integer('citizen_card_number')->unique();
            $table->integer('tax_identification_number')->unique();
            $table->string('email',50)->unique();
            $table->string('name');
            $table->string('address1');
            $table->string('address2')->nullable(true);
            $table->string('postal_code',8);
            $table->string('locality');
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
