<?php

namespace App\Repository\Article;

use Illuminate\Http\Request;

interface ArticleRepository
{
    public function getArticle();
    public function getArticleById($id);
    public function createArticle(Request $request);
    public function editArticle(Request $request, $id);
    public function deleteArticle($id);
}