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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');                      // نام مهارت (e.g. Laravel, MySQL, Tailwind)
            $table->string('category');                  // دسته بندی: backend, frontend, database, devops
            $table->unsignedTinyInteger('proficiency')->default(85); // درصد تسلط (برای رندرهای نواری یا متریال)
            $table->string('highlight')->nullable();     // توضیح یک‌خطی مهارت یا تجربه
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('is_featured')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
