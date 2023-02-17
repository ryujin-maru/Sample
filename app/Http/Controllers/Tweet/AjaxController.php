<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;

class AjaxController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $id = $request->input('id');
        $tweet = Tweet::where('id',$id)->first();

        if($tweet) {
            $content = $tweet->content;
        }else{
            $content = '存在しないIDです。';
        }

        header('Content-type: application/json');
        echo json_encode($content,JSON_UNESCAPED_UNICODE);
    }
}
