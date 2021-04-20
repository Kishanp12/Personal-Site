@props([
    'title',
    'subtitle',
    'icon' => ''
])


<div class="flex flex-col items-center">
    <div class="box-content w-24 h-24 p-4 bg-blue-300 border-4 border-black ">
        <img src="{{ asset('images/'.$icon) }}">
     </div>
    <span class="mt-5 text-xl font-bold text-center">{{$title}}</span>
    <span class="mt-1 text-gray-400">{{$subtitle}}</span>
</div>
