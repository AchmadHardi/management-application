<?php

namespace App\Repository\Article;

use App\Repository\Article\ArticleRepository;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleRepositoryImpl implements ArticleRepository
{
    public function getArticle()
    {
        return Article::all();
    }

    public function getArticleById($id)
    {
        return Article::find($id);
    }

    public function createArticle(Request $request)
    {
        return Article::create($request->all());
    }

    public function editArticle(Request $request, $id)
    {
        $Article = Article::find($id);
        return $Article->update($request->all());
    }

    public function deleteArticle($id)
    {
        return Article::destroy($id);
    }
}