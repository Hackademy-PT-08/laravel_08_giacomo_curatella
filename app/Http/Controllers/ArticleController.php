<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Exception;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //!crea post
    public function index() {
        return view('articoli.create');
    }
    //!store articles
    public function store(Request $request){
        $article = new Article();
        
        
        try {
            $article->author = $request->author;
            $article->title = $request->title;
            $article->content = $request->content;
            $article->save();
            sleep(2);
            return redirect(route('home'))->with('success', 'Articolo pubblicato correttamente!');
            //code...
        } catch (Exception $error) {
            sleep(2);
            return redirect(route('home'))->with('fail', 'Non è stato possibile pubblicare l\'articolo, verifica di aver inserito correttamente tutti i dati richiesti!');
        }
        
    }
}
