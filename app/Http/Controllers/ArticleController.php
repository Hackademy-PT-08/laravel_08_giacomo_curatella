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
        $articles = Article::all();
        return view('articoli.index', ['articoli'=>$articles]);
    }
    //!vista per creazione articolo
    public function create()
    {
        return view('articoli.create');
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
        return redirect(route('articoli'))->with('success', 'Articolo pubblicato correttamente!');
    }

    //!mostriamo il dettaglio dell'articolo
    public function show($id)
    {
        $article = Article::find($id);
        return view('articoli.dettaglio', ['articolo' => $article]);
    }

    //!mostriamo la pagina per la modifica dell'articolo
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articoli.edit', ['articolo'=>$article]);
    }

    //!scriviamo le modifiche dell'articolo nel record
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $image_id = $article->image_id;

        $article->title = $request->title;
        $article->content = $request->content;

        if($request->image){
            $file_name = 'image-article-' . $image_id . '.' . $request->file('image')->extension();
            $article->image = $file_name;
            $article->image_id = $image_id;
            $photo = $request->file('image')->storeAs('public', $file_name);
        }else{
            $article->image = $article->image;
            $article->image_id = $article->image_id;
        }
        $article->save();
        return redirect()->route('modificaArticolo', ['id'=>$article->id]);
    }

    //!eliminiamo l'articolo cliccato dall'utente
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articoli');
    }
}
