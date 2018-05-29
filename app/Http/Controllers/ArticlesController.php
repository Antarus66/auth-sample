<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Auth\Access\AuthorizationException;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return view('404');
        }

        try {
            $this->authorize('view', $article);
        } catch (AuthorizationException $e) {
            return redirect("/articles");
        }

        return view('articles.show', ['article' => $article]);
    }
}
