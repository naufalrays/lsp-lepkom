<?php

namespace App\Http\Controllers\Articles;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserArticleController extends Controller
{
    public function index()
    {
        $dataArticles = Article::all();
        return view('user.article', ['dataArticles' => $dataArticles]);
    }

    public function show(string $id)
    {
        $dataArticle = Article::find($id);
        return view('user.detail', ['data' => $dataArticle]);
    }
}
