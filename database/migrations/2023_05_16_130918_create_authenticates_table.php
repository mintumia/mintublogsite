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
        Schema::create('authenticates', function (Blueprint $table) {
            $table->id();
            $table->string('name',120);
            $table->enum('gender',["M","F","O"]);
            $table->string('email',150);
            $table->string('password');
            $table->string('url',32);
            $table->boolean('is_active')->default(1);
            $table->date('last_login_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authenticates');
    }
};
