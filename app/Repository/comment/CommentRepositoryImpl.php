<?php

namespace App\Repository\Comment;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentRepositoryImpl implements CommentRepository
{
    public function getComment()
    {
        return Comment::all();
    }

    public function getCommentById($id)
    {
        return Comment::find($id);
    }

    public function createComment(Request $request)
    {
        return Comment::create($request->all());
    }

    public function editComment(Request $request, $id)
    {
        $Comment = Comment::find($id);
        return $Comment->update($request->all());
    }

    public function deleteComment($id)
    {
        return Comment::destroy($id);
    }
}