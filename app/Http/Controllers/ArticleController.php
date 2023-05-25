<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Article\ArticleRepositoryImpl;

class ArticleController extends Controller
{
    protected $article;

    public function __construct(ArticleRepositoryImpl $article)
    {
        $this->article = $article;
    }

    public function index()
    {
        return response()->json($this->article->getArticle());
    }

    public function show($id)
    {
        return response()->json($this->article->getArticleById($id));
    }

    public function store(Request $request)
    {
        return response()->json($this->article->createArticle($request));
    }

    public function edit(Request $request, $id)
    {
        return response()->json($this->article->editArticle($request, $id));
    }

    public function delete($id)
    {
        return response()->json($this->article->deleteArticle($id));
    }
}