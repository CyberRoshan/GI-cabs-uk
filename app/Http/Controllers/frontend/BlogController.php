<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::where('status',1)->orderBy('id','DESC')->get();
        $data = array(
            'title' => 'Blog',
            'blog' => $blog
        );
        return view('frontend.blog', $data);
    }

    public function detail($id){
        $blog = Blog::where('slug',$id)->first();
        $data = array(
            'title' => $blog->title,
            'file' => $blog,
        );
        return view('frontend.blog_detail', $data);
    }
}
