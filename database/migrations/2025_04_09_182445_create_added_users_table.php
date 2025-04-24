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
        Schema::create('added_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->date('date_of_birth')->nullable();
            $table->integer('no_of_family_members')->nullable();
            $table->string('occupation')->nullable();
            $table->string('institute_name')->nullable();
            $table->text('address')->nullable();
            $table->boolean('status')->default(1);
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('added_users');
    }
};
