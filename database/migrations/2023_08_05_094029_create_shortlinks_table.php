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
        Schema::create('shortlinks', function (Blueprint $table) {
            $table->id();
            $table->string('shortlink')->unique()->comment('generated tiny link');
            $table->text('link')->comment('actual link');
            $table->integer('user_id')->comment('user table foreign key');
            $table->boolean('active')->default(true)->comment('1 is active and 0 is inactive');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shortlinks');
    }
};
