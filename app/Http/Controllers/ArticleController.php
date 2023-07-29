<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Article;
use Exception;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //!crea post
    public function index() {
        if(auth()->check()){
            return view('articoli.create');
        }
        return view('errors.redirect-error');
    }
    //!store articles
    public function store(ImageRequest $request){
        $article = new Article();
        
        
        $image_id = uniqid();
        $article->author = $request->author;
        $article->title = $request->title;
        $article->content = $request->content;
        if($request->image == ''){
            $article->image = '';
            $article->image_id = '';
        }else {
            $file_name = 'image-article-' . $image_id . '.' . $request->file('image')->extension();
            $article->image = $file_name;
            $article->image_id = $image_id;
            $photo = $request->file('image')->storeAs('public', $file_name);
        }
        $article->save();
        sleep(2);
        return redirect(route('home'))->with('success', 'Articolo pubblicato correttamente!');

         
            // sleep(2);
            // return redirect(route('home'))->with('fail', 'Non è stato possibile pubblicare l\'articolo, verifica di aver inserito correttamente tutti i dati richiesti!');
        
        
    }
}
