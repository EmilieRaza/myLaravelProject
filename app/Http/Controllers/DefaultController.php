<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index(){
        $posts = [
            "Mon premier titre",
            "Mon second titre",
        ];

        return view('articles',compact('posts'));
    }

    public function show($id){
        $posts = [
            1 => 'detail de 1er article',
            2 => 'detail du deuxième article',
        ];
        $post = $posts[$id] ?? "pas d'article";

        return view('article',[
            'post' => $post
        ]);
    }

    public function contact(){

        return view('contact');
    }

}
