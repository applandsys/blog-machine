<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage(){
        $meta = array(
            'title' => "Homepage",
            'meta_tags' => "Homepage",
            'meta_description' => "Homepage",
        );
        return view('front.homepage',compact('meta'));
    }

    public function postDetail($id, $slug){
        $post = Post::find($id);
        $meta = array(
            'title' =>  $post->title,
            'meta_tags' => "meta tags from post meta tags",
            'meta_description' => "Description form post meta description",
            'slug' => $slug,
        );
        return view('front.post-detail',compact('meta','post'));
    }


    public function category($id, $slug){
        dd($slug);
        $meta = array(
            'title' => "Category Name",
            'meta_tags' => "Homepage",
            'meta_description' => "Homepage",
        );
        return view('front.homepage',compact('meta'));
    }


    public function page($id, $slug){
        dd($slug);
        $meta = array(
            'title' => "Page Title",
            'meta_tags' => "Page",
            'meta_description' => "Homepage",
        );
        return view('front.homepage',compact('meta'));
    }

}
