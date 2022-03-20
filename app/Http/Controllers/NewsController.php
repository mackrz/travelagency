<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class NewsController extends Controller
{
    public function index()
    {
        $news = Post::orderBy('created_at')->limit(3)->get();
        return view('index', ['news' => $news]);
    }
}
