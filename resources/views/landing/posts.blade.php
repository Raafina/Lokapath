<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mb-8 mx-auto max-w-screen-xl ">
        {{-- Search Bar --}}
        <form action="/posts" method="GET" class="lg:py-4 ">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
            @endif
            <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                <div class="relative w-full">
                    <label for="search"
                        class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                        </svg>

                    </div>
                    <input
                        class="block p-3 pl-10 w-full text-sm text-black placeholder:text-gray-400 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search for Article" type="search" id="search" name='search'
                        autocomplete="off">
                </div>
                <div>
                    <button type="submit"
                        class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search</button>
                </div>
            </div>
        </form>

        {{ $posts->links() }}

        <div class="mb-8 mt-3 md:mt-8 grid gap-4 md:gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            {{-- Content --}}
            @forelse ($posts as $post)
                <article
                    class="bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="mx-auto">
                        <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-64 object-cover rounded-t-lg">
                    </div>
                    <div class="px-6 pb-6 pt-4">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <a href="/posts?category={{ $post->category->slug }}" class="hover:opacity-75">
                                <span
                                    class="bg-{{ $post->category->color }}-100 text-black text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">

                                    {{ $post->category->name }}
                                </span>
                            </a>
                            <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                        <h2
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                            <a href="/post/{{ $post->slug }}"
                                class="text-black no-underline hover:text-black">{{ Str::limit($post->title, 40) }}</a>
                        </h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{!! Str::limit($post->body) !!}.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <a href="/posts?user={{ $post->user->username }}"
                                    class="mt-4 font-medium dark:text-white hover:underline hover:cursor-pointer hover:text-black text-black no-underline">
                                    {{ $post->user->name }}
                                </a>
                            </div>
                            <a href="/post/{{ $post->slug }}"
                                class="mt-5 inline-flex items-center font-medium text-primary-600 no-underline dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                </article>
            @empty
                <div class="">
                    <p class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">No post found
                    </p>
                    <a class=" hover:underline" href="/posts">Back To Blog</a>
                </div>
            @endforelse
        </div>

        {{ $posts->links() }}
    </div>

</x-layout>
