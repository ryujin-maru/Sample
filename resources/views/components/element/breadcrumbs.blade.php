
<div class="flex">
    @foreach ($breadcrumbs as $breadcrumb)
    @if($loop->last)
    <a class="text-gray-500" href="{{$breadcrumb['href']}}">{{$breadcrumb['tag']}}</a>
    @else
    <a class="text-gray-500" href="{{$breadcrumb['href']}}">{{$breadcrumb['tag']}}</a>
    ＞
    @endif
    @endforeach
</div>