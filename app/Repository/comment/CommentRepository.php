<?php

namespace App\Repository\Comment;

use Illuminate\Http\Request;

interface CommentRepository
{
    public function getComment();
    public function getCommentById($id);
    public function createComment(Request $request);
    public function editComment(Request $request, $id);
    public function deleteComment($id);
}