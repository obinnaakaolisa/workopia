@props([
    'url' => '/', 
    'icon' => null, 
    'bgClass' => 'bg-yellow-500', 
    'hoverClass' => 'hover:bg-yellow-600', 
    'textClass' => 'text-black', 
    'block' => null
])

<a href="{{$url}}" class="{{$bgClass}} {{$hoverClass}} {{$hoverClass}} px-4 py-2 rounded {{$block ? 'block' : ''}} hover:shadow-md transition duration-300">
    @if ($icon)
        <i class="fa-solid fa-{{$icon}} mr-1"></i>
    @endif
    {{$slot}}
</a>