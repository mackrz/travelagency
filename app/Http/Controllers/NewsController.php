<?php
//głowny controller za późno ogarnąłem jak działą laravel

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Newgallery;

use Illuminate\Support\Facades\DB;
use PDO;
class NewsController extends Controller
{
    // głowna strona
    public function index()
    {
        // 3 najnowsze wpisy
        $news = Post::orderBy('created_at')->limit(3)->get();
        //galeria
        $gallery = Newgallery::orderBy('created_at')->get();
        // opcje do wyszukiwarki
        $search = $this->completeSearch();
        //przesłanie do widoku
        return view('index', ['news' => $news , 'gallery' => $gallery , 'search' => $search]);
    }
    // wszystkie wylistowane
    public function showPosts()
    {
        $countPosts = 5;
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
    public function completeSearch(){
        $search = DB::select("select categories.name from categories");  
        return $search;
    }
    public function showByCity($city){
        // $search = DB::select("select posts.* from posts
        // left join categories on posts.category_id = categories.id
        // where categories.name = '$city' "); 
        $search = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.*')
            ->where('categories.name', '=', $city)
            ->get();
          
        return view('post.posts', ['posts' => $search]);
    }
}
