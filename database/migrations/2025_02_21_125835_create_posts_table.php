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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('slug');
            $table->longText('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->json('meta_tags')->nullable();
            $table->longText('meta_description')->nullable();
            $table->enum('status',['published','draft','trash'])->default('draft');
            $table->enum('discussion',['open','close','restricted'])->default('open');
            $table->smallInteger('revision')->default(0);
            $table->bigInteger('user_id');
            $table->enum('format',['Standard','Audio','Gallery','Video','Image'])->default('Standard');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
