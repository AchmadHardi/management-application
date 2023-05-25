<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Comment\CommentRepositoryImpl;

class CommentController extends Controller
{
    protected $comment;

    public function __construct(CommentRepositoryImpl $comment)
    {
        $this->comment = $comment;
    }

    public function index()
    {
        return response()->json($this->comment->getComment());
    }

    public function show($id)
    {
        return response()->json($this->comment->getCommentById($id));
    }

    public function store(Request $request)
    {
        return response()->json($this->comment->createComment($request));
    }

    public function edit(Request $request, $id)
    {
        return response()->json($this->comment->editComment($request, $id));
    }

    public function delete($id)
    {
        return response()->json($this->comment->deleteComment($id));
    }
}