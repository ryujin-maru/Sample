@props([
    'href' => '',
    'theme' => 'primary' 
])

@php
    if(!function_exists('getButton')) {
        function getButton($theme) {
            return match ($theme) {
                'primary' => 'bg-blue-500 text-white hover:bg-blue-600 ring-blue-500 ',

                'secondary' => 'bg-red-500 text-white hover:bg-red-600 ring-red-500 focus:ring-red-600'
            };
        }
    }
@endphp

<a href="{{$href}}" class="borer shadow-sm py-2 px-4 text-md rounded-md {{getButton($theme)}}">
{{$slot}}
</a>