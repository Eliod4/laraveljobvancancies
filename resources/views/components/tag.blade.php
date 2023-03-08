@props(['tagss'])

@php
    $tags=explode(",","$tagss") 

@endphp

<ul class="flex">
    @foreach($tags as $tagi)
    <li
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
        <a href="/?tagi={{ $tagi }}">{{ $tagi }}</a>
    </li>
    @endforeach
    
    
</ul>