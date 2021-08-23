<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $bannerposts = Post::orderByDesc('id')->take(3)->get();
        $randomposts = Post::orderByRaw("RAND()")->take(3)->get();
        $parentfeaturedpost = Post::orderByDesc('parent_id')->take(1)->get();
        $childfeaturedposts = Post::orderByDesc('publishedAt')->take(2)->get();
        return view('blog.index',[
            'bannerposts' => $bannerposts,
            'randomposts' => $randomposts,
            'parentfeaturedpost'=> $parentfeaturedpost,
            'childfeaturedposts' => $childfeaturedposts

        ]);
    }

    public function about(){
        return view('blog.about');
    }

    public function contact(){
        return view('blog.contact');
    }

    public function post(){
        return view('blog.post');
    }

    public function allCategory(){
        return view('blog.all_categories');
    }

    public function singlePost($id){
        $singlepost = Post::find($id)->take(1)->get();
        return view('blog.single_post',[
            'singlepost' => $singlepost
        ]);
    }

    public function allPost(){
        return view('blog.all_posts');
    }

    public function darkMode(){
        $posts = Post::all()->take(3);
        $bannerposts = Post::orderByRaw("RAND()")->take(3)->get();
        $parentfeaturedpost = Post::orderByDesc('publishedAt')->take(1)->get();
        $childfeaturedposts  = Post::orderByDesc('parent_id')->take(2)->get();
        $popularposts = Post::orderByRaw("RAND()")->take(4)->get();
        $recommendedposts = Post::orderByDesc('id')->take(3)->get();
        return view('blog.index_dark_mode',[
            'posts' => $posts,
            'bannerposts' => $bannerposts,
            'parentfeaturedpost' => $parentfeaturedpost,
            'childfeaturedposts' => $childfeaturedposts,
            'popularposts' => $popularposts,
            'recommendedposts' => $recommendedposts
        ]);
    }

    public function author(){
        $authors = User::orderByDesc('created_at')->take(4)->get();
        return view('blog.authors',[
            'authors' => $authors
        ]);
    }

    public function singleAuthor($id){
        return view('blog.single_author');
    }
}
