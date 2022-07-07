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
        Schema::create('analytic', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('gender');
            $table->integer('tenure');
            $table->string('PhoneService');
            $table->string('SeniorCitizen');
            $table->string('StreamingTV');
            $table->string('InternetService');
            $table->string('PaperlessBilling');
            $table->float('MonthlyCharges');
            $table->float('TotalCharges');
            $table->string('Partner');
            $table->string('Churn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analytic');
    }
};
