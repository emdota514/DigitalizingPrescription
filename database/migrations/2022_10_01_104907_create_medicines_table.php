<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->unsignedBigInteger('medicine_id')->autoIncrement(); // Primary key
            $table->string('medicine_name');
            $table->string('medicine_type');
            $table->string('medicine_dose');
            $table->string('medicine_price');
            $table->date('medicine_expiry_date');
            $table->string('medicine_company_name');
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
        Schema::dropIfExists('medicines');
    }
}
