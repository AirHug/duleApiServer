<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        $comment = new Comment();
        $comment->player_id = $request->user()->id;
        $comment->content = $request->input('content');
        $comment->save();
        return response()->json([
            'code' => 200,
            'msg' => '提交成功'
        ]);
    }
}
