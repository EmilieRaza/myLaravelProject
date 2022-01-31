<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index(){
        $posts = [
            "Le « quasi-candidat » Macron...",
            "MCes parents qui ont renoncé...",
            "Un autotest négatif suivi d’un PCR positif...",
            "Coton bio, « made in France »...",
            "Les mégaprofits du CAC 40...",
            "Dans l’industrie de la modee...",
        ];

        return view('articles',compact('posts'));
    }

    public function show($id){
        $posts = [
            1 => 'Le « quasi-candidat » Macron tente de survoler la campagne présidentielle',
            2 => 'Ces parents qui ont renoncé à appliquer le protocole sanitaire à l’école pour leurs enfants',
            3 => 'Un autotest négatif suivi d’un PCR positif, des symptômes mais un test antigénique négatif... Comment expliquer autant de discordances ?',
            4 => 'Coton bio, « made in France » et vêtements recyclés… L’utopie de la mode durable',
            5 => 'Les mégaprofits du CAC 40 et le débat récurrent sur le partage des bénéfices',
            6 => 'Dans l’industrie de la mode, ce n’est pas le coton bio ou le polyester recyclé qui changeront la donne',
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
