<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;

class ChartController extends Controller
{
    public function __invoke()
    {
        $news = News::all();
        $count = [];
        $labels = [];
        foreach ($news as $data){
            $count = $data->getAttribute('count_views').', ';
            $labels = $data->getAttribute('title').', ';
        }
        return view('admin.chart', compact('news', 'count', 'labels'));
    }
}
