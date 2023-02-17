<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Http\Requests\TweetRequest;

class CreteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(TweetRequest $request)
    {
        $input = $request->tweet();
        $tweet = new Tweet;
        $tweet->user_id = $request->user()->id;
        $tweet->content = $request->tweet();
        $tweet->save();
        return redirect()->route('tweet.index');
    }
}
