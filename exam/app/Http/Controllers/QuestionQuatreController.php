<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChannelRequest;
use App\Models\Category;
use App\Models\Channel;
use Illuminate\Http\Request;

class QuestionQuatreController extends Controller
{
    // TODO: question 4
    public function index(Request $request)
    {
        $channel = Channel::findOrFail($request->idChannel);
        $channel->cat = $request->cat;

        $categories = Category::all();

        return view('questions.quatre', [
            "channel" => $channel,
            "categories" => $categories
        ]);
    }


    public function channelEdit(ChannelRequest $request)
    {
        $id = $request->idChannel;

        $data = $request->validated();
        $channel = Channel::findOrFail($id);

        $channel->title = $data['title'];
        $channel->about = $data['about'];
        $channel->category_id = $data['category_id'];

        $channel->save();

        return redirect()->route('app_question_quatre', $channel->id);
    }
}
