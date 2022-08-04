<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->comment_body;
        $comment->user()->associate($request->user());
        $comment->waktu = Carbon::now();
        $comment->kodesite = $request->post_id;
        $post = Post::where('kodesite','=', $request->post_id)->first();
        $post->comments()->save($comment);
        
        return back();
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment;
        $reply->body = $request->comment_body;
        $reply->user()->associate($request->user());
        $reply->waktu = Carbon::now();
        $reply->kodesite = $request->post_id;
        $reply->parent_id = $request->comment_id;
        $post = Post::where('kodesite','=', $request->post_id)->first();
        $post->comments()->save($reply);

        return back();
    }
}
