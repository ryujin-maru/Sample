<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TweetRequest;
use App\Http\Services\TweetService;

class PutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(TweetRequest $request,TweetService $tweetService)
    {
        $tweetId = $request->tweetId();
        $tweet = $tweetService->tweet($tweetId);
        $tweet->content = $request->tweet();
        $tweet->save();
        return redirect()->route('tweet.index');
    }
}
