<?php

namespace App\Http\Controllers\Reviews;

use App\Models\Review;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        $review = Review::all();
        return view('reviews.create', compact('review'));
    }
}
