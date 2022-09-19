@props(['tagsCsv']) 
{{-- tag the enables it  to be accessed in another page --}}


@php
    

$tags=explode(',',$tagsCsv); //turn the coma separated value into an array


@endphp

@foreach ($tags as $tag)
    
@endforeach
<ul class="flex">
    <li
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>