@if (Auth::user()->id == $tweet->user_id)
<div>
    <a class="text-gray-500" href="{{route('tweet.update.index',['tweetId'=>$tweet->id])}}">編集</a>

    <form method="post" action="{{route('tweet.delete',['tweetId'=>$tweet->id])}}">
        @csrf
        @method('DELETE')
        <button class="text-gray-500" type="submit">削除</button>
    </form>
</div>
@endif