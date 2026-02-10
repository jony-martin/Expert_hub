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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('tax_collection')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('tax_type')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('app_name')->nullable();
            $table->string('app_url')->nullable();
            $table->string('app_locale')->nullable();
            $table->string('timezone')->nullable();
            $table->string('currency')->nullable();
            $table->string('time_format')->nullable();
            $table->string('footer_text')->nullable();
            $table->string('copyright_text')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('pinterest')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
