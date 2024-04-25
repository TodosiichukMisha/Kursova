<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Course;
use App\Models\Intensive;
use App\Models\News;
use App\Models\Review;
use App\Models\Task;
use App\Models\Test;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        News::factory(20)->create();
        Course::factory(20)->create();
        Test::factory(10)->create();
        Task::factory(5)->create();
        Review::factory(5)->create();
    }
}
