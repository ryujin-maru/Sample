@props([
    'tweets' => [],
    'theme' => 'private',
])

<div class="bg-white rounded-md shadow-lg my-5">
    <ul>
        @foreach ($tweets as $tweet)
        <li class="border-b last:border-b-0 border-gray-200 p-4 flex items-start justify-between">
            <div><span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">{{$tweet->user->name}}</span>
            <p class="text-gray-600">{{e($tweet->content)}}</p>
            </div>

            <x-tweet.update :tweet=$tweet></x-tweet.update>
        </li>

        
        @endforeach
    </ul>
</div>
