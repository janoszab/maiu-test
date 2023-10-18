<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id('companyId')->autoIncrement();
            $table->string('companyName', 255);
            $table->string('companyRegistrationNumber', 15);
            $table->date('companyFoundationDate');
            $table->string('country', 255);
            $table->string('zipCode', 50);
            $table->string('city', 255);
            $table->string('streetAddress', 255);
            $table->string('latitude', 20);
            $table->string('longitude', 20);
            $table->string('companyOwner', 255);
            $table->integer('employees');
            $table->string('activity');
            $table->boolean('active');
            $table->string('email', 255)->unique();
            $table->string('password', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
