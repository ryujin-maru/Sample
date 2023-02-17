@auth
<form method="post" action="{{route('tweet.create')}}">
    @csrf
    @method('post')
    <div class="m-1">
        <textarea name="tweet" rows="3" class="focus:ring-blue-400 focus:border-blue-400 mt-1 w-full sm:text-sm border borer-gray-300 rounded-md p-2 block" placeholder="つぶやきを入力"></textarea>
    </div>

    <div class="flex justify-between">
        <p class="text-gray-500 mt-2 text-sm">140字まで</p>
    
        @error('tweet')
            <x-alert.error>{{$message}}</x-alert.error>
        @enderror
    </div>

    <div class="flex justify-end flex-wrap mt-4">
        <x-element.button>つぶやく</x-element.button>
    </div>
    

</form>
@endauth

@guest
    <div class="flex justify-center">
        <div class="flex justify-between w-1/2">
            <x-element.button-a href="{{route('login')}}">ログイン</x-element.button-a>
            <x-element.button-a href="{{route('register')}}" theme="secondary">会員登録</x-element.button-a>
        </div>
    </div>
@endguest