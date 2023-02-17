<div class="flex justify-center">
    <div class="max-w-screen-sm w-full">
        <div class="justify-end flex">
            <a href="{{route('logout')}}" class="text-gray-500 text-lg mt-2">ログアウト</a>
        </div>
        {{$slot}}
    </div>
</div>