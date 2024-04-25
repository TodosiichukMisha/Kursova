<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Test;

class ShowController extends Controller
{
    public function __invoke(Course $course)
    {
        $test = Test::orderBy('id')->paginate(3);
        return view('courses.show', compact('course', 'test'));
    }
}
