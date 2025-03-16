<?php

namespace App\Http\Controllers;

use App\Models\Post;

class FrontController extends Controller
{
    public function homepage(){
        $pageInfo = array(
            'name' => 'homepage',
        );
        return view('front.homepage',compact('pageInfo'));
    }

    public function postDetail($id, $slug){
        $post = Post::find($id);
        $pageInfo = array(
            'name' => 'post',
        );
        return view('front.post-detail',compact('pageInfo','post'));
    }


    public function category($id, $slug){
        dd($slug);
        $pageInfo = array(
            'name' => 'post',
        );
        return view('front.homepage',compact('pageInfo'));
    }


    public function page($id, $slug){
        dd($slug);
        $pageInfo = array(
            'name' => 'post',
        );
        return view('front.homepage',compact('pageInfo'));
    }

}
