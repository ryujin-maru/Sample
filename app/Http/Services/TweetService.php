<?php

namespace App\Http\Services;

use App\Models\Tweet;

class TweetService  {

    public function getTweets() {
        return Tweet::with('images')->orderBy('id','DESC')->get();
    }

    public function tweet($tweetId) {
        return Tweet::where('id',$tweetId)->firstOrFail();
    }

    public function checkOwnTweet($tweetId,$userId) {
        $tweet = Tweet::where('id',$tweetId)->first();
        if(!$tweet) {
            return false;
        }

        return $userId === $tweet->user_id;
    }
}