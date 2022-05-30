<?php
//głowny controller za późno ogarnąłem jak działą laravel

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Newgallery;

class NewsController extends Controller
{
    // głowna strona
    public function index()
    {
        // 3 najnowsze wpisy
        $news = Post::orderBy('created_at')->limit(3)->get();
        //galeria
        $gallery = Newgallery::orderBy('created_at')->get();
        //przesłanie do widoku
        return view('index', ['news' => $news , 'gallery' => $gallery]);
    }
    // wszystkie wylistowane
    public function showPosts()
    {
        $countPosts = 2;
        $posts = Post::orderBy('created_at')->get();
        //pager
        $posts = Post::simplePaginate($countPosts);

        return view('post.posts', ['posts' => $posts]);
    }
    // pojedynczy podgląd
    public function art($slug)
    {
        $post = Post::findBySlug($slug);
        return view('post.art', ['post' => $post]);
    }
   
}
