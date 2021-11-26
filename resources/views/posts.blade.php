<x-layout>

    @include('_header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
            <x-posts-grid :posts="$posts"></x-posts-grid>
            {{$posts->links()}}

        @else
            <h1>No posts yet</h1>
        @endif


    </main>


</x-layout>
