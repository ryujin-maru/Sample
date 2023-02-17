{{-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>編集</h1>
    <form method="post" action="{{route('tweet.update.put',['tweetId' => $tweet->id])}}">
        @csrf
        @method('PUT')
        <textarea name="tweet" id="tweet-content">{{$tweet->content}}</textarea>
        <button type="submit">編集</button>
    </form>
</body>
</html> --}}

<x-layout>
    <x-tweet.single>
        {{-- <h1 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">つぶやきアプリ</h1> --}}
        @php
            $breadcrumbs = [
                ['href' => route('tweet.index'),'tag' => 'TOP'],
                ['href' => '#','tag' => '編集']
            ];
        @endphp
        <x-element.breadcrumbs :breadcrumbs=$breadcrumbs></x-element.breadcrumbs>
        <x-tweet.put :tweet=$tweet></x-tweet.put>
    </x-tweet.single>
</x-layout>