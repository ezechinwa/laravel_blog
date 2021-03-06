@props(['categories','current'])
@foreach($categories as $category)

    @if($category->name == $current)
    <a href="/?category={{$category->slug}}&{{ http_build_query(request()->except(['category','page'])) }}"
       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
       style="font-size: 10px">{{$category->name}}</a>
    @else
        <a href="/?category={{$category->slug}}&{{ http_build_query(request()->except(['category','page'])) }}"
           class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
           style="font-size: 10px">{{$category->name}}</a>
    @endif



@endforeach
