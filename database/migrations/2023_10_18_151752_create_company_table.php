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
        Schema::create('companies', function (Blueprint $table) {
            $table->id('companyId')->autoIncrement();
            $table->string('companyName', 255)->nullable(false);
            $table->string('companyRegistrationNumber', 15)->nullable(false);
            $table->date('companyFoundationDate')->nullable(false);
            $table->string('country', 255)->nullable(false);
            $table->string('zipCode', 50)->nullable(false);
            $table->string('city', 255)->nullable(false);
            $table->string('streetAddress', 255)->nullable(false);
            $table->string('latitude', 20)->nullable(false);
            $table->string('longitude', 20)->nullable(false);
            $table->string('companyOwner', 255)->nullable(false);
            $table->integer('employees')->nullable(false);
            $table->string('activity')->nullable(false);
            $table->boolean('active')->nullable(false);
            $table->string('email', 255)->unique()->nullable(false);
            $table->string('password', 255)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
