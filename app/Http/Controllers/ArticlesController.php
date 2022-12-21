<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\User;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index ()
    {
        $articles = Article::All();
           

        return view('articles.articles', compact('articles'));

    }

    
    public function show($id)
    {
        $article = Article::with('user')->with(['comments' => function ($query) {
            $query->with('user');
        }])->findOrFail($id);

        $article = Article::with(['comments' => function ($query) {
            $query->with('user');
        }])->findOrFail($id);
        
        return view('articles.show', compact('article'));
    }
    
    // public function show($id)
    // {
    //     $article = Article::with('user')->where('id', $id)->firstOrFail();
    //     // dd($article);
    //     // ddd($article);
    //     return view('articles.show', compact('article'));
    // }

    
    // public function show(Article $article)
    // {
    //     return view('articles.show', compact('article'));
    // }

    // dans la méthode show()

}
