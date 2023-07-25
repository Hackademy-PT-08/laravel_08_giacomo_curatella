<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //!home page
    public function index(){
        $articles = Article::all();
        return view('home.index', ['articoli' => $articles]);
    }
}
