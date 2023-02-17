<x-layout>
    <x-tweet.single>
        <h1 class="text-center text-blue-500 text-3xl font-bold mt-8 mb-8">つぶやきアプリ</h1>
        <x-tweet.form></x-tweet.form>
        <x-tweet.ajax></x-tweet.ajax>
        <x-tweet.list :tweets=$tweets></x-tweet.list>
        <script src="{{asset('js/ajax.js')}}"></script>
    </x-tweet.single>
</x-layout>
