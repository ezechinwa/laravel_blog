{{--@props(['categories'])--}}
<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch Blog Project</span> News
    </h1>



    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->

        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">

            <div x-data="{ show: false }">
                <button @click="show=!show" class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                    {{isset($currentCategory) ? ucwords($currentCategory) : "Category"}}
                </button>
                <div x-show="show" class="py-2">
                    <x-categories-dropdown :categories="$categories"></x-categories-dropdown>
                 </div>

            </div>


        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                @if(request('category'))
                    <input type="hidden"
                           name="category"
                           value="{{request('category')}}"
                    >
                @endif

                <input type="text"
                       name="search"
                       placeholder="Find something"
                       value="{{request('search')}}"
                       class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>
</header>
