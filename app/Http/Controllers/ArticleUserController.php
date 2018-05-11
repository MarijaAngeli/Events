<?php

namespace App\Http\Controllers;

use App\User;
use App\Article;
use Illuminate\Http\Request;

class ArticleUserController extends Controller
{
    public function show($userId){

        $articles = User::find($userId)->articles;
        return view('articles.show', compact('articles'));
        //return Article::find(1)->user()->get();
    }
}
