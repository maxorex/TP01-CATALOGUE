<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Channel;
use App\Models\Comment;
use Illuminate\Http\Request;

class QuestionTroisController extends Controller
{
    // TODO: question 3
    public function index(Request $request)
    {
        $channel = Channel::findOrFail($request->id);

        $comments = $channel->comments;


        return view('questions.trois', [
            "channel" => $channel,
            "comments" => $comments
        ]);
    }

    public function commentAdd(CommentRequest $request)
    {
        $data = $request->validated();

        $comment = new Comment();
        $comment->message = $data['message'];
        $comment->channel_id = $data['channel_id'];
        $comment->commentDate = now();

        $comment->save();

        return redirect()->route('app_question_trois', $data['channel_id']);
    }
}
