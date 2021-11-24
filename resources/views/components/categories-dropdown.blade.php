@props(['categories'])
@foreach($categories as $category)
<a href= "/categories/{{$category->slug}}" class="block text-left px-3 text-xs leading-5 hover:bg-gray-300">{{$category->name}}</a>
@endforeach
