<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TweetRequest;
use App\Http\Services\TweetService;
use App\Models\Tweet;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class DeleteController extends Controller
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
        Tweet::destroy($tweetId);
        return redirect()->route('tweet.index');
    }
}
