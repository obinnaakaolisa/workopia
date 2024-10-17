@props(['url' => '/', 'active' => true, 'icon' => null])

<a href="{{$url}}" class="text-white hover:underline py-2 {{$active ? 'text-yellow-500 font-bold' : ''}}">
    @if ($icon)
        <i class="fa-solid fa-{{$icon}} mr-1"></i>
    @endif
    {{$slot}}
</a>