<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;

class PagesController extends Controller
{

    public function show($slug)
    {
        $page = Page::findBySlug($slug);
        if($page){
            return view('page.show', ['page' => $page]);
        }
        else
        return view('404');
    }
}
