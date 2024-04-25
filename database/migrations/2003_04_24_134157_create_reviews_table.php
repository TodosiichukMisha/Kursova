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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->integer('rating');
            $table->integer('likes')->default(0);
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('news_id');
            $table->unsignedBigInteger('test_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();
            $table->softDeletes();

            $table->index('course_id', 'review_course_idx');
            $table->index('news_id', 'review_news_idx');
            //$table->index('intensive_id', 'review_intensive_idx');
            $table->index('test_id', 'review_test_idx');
            $table->index('user_id', 'review_user_idx');

            $table->foreign('course_id', 'review_course_fk')->on('courses')->references('id');
            $table->foreign('news_id', 'review_news_fk')->on('news')->references('id');
            //$table->foreign('intensive_id', 'review_intensive_fk')->on('intensives')->references('id');
            $table->foreign('test_id', 'review_test_fk')->on('tests')->references('id');
            $table->foreign('user_id', 'review_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
