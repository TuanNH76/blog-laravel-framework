<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;

class BlogPostController extends Controller{
    public function index(){
        $posts = BlogPost::all();
        return view('blog.index',[
            'posts' => $posts,
        ]);
    }

    public function create(){

    }

    public function store(Request $request ){

    }

    public function show(BlogPost $blogPost){
        return $blogPost;
    }

    public function edit(BlogPost $blogPost){

    }

    public function update(Request $request, BlogPost $blogPost){

    }
    public function destroy(BlogPost $blogPost){

    }
}
