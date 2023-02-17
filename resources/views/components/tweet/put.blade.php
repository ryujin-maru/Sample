<div>
    <form action="{{route('tweet.update.index',['tweetId'=>$tweet->id])}}" method="post">
        @csrf
        @method('PUT')
        <textarea rows="3" class="focus:border-blue-400 mt-1 sm:text-sm rounded-md block p-2  w-full border-gray-300 focus:ring-blue-500" name="tweet" id="tweet-content">{{$tweet->content}}</textarea>

        <div>
            <p class="text-gray-500">140字まで</p>

            <div>
                @error('tweet')
                <x-alert.error>{{$message}}</x-alert.error>
                @enderror
            </div>
        </div>

        <div class="flex justify-end mt-4">
            <x-element.button>編集</x-element.button>
        </div>
    </form>
</div>