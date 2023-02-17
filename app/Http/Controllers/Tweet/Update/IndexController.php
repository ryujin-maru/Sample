<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TweetRequest;
use App\Http\Services\TweetService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,TweetService $tweetService)
    {
        $tweetId = $request->route('tweetId');

        if(!$tweetService->checkOwnTweet($tweetId,$request->user()->id)) {
            throw new AccessDeniedHttpException();
        }


        $tweet = $tweetService->tweet($tweetId);
        return view('tweet.update')->with('tweet',$tweet);
    }

}
