<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function news ($newsItem) {
        return view('news',['name' => $newsItem]);
    }
}
