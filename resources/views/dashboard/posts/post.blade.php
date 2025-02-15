<x-layout-dashboard>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    {{-- Action button --}}
                    <div class="flex flex-row gap-2 mb-4">
                        <div class="bg-gray-800 p-1 rounded-md">
                            <a href="/dashboard/posts" class="flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                                </svg>
                            </a>
                        </div>
                        <div class="bg-yellow-500 p-1 rounded-md">
                            <a href="/dashboard/post/{{ $post->slug }}/edit">
                                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                                </svg>
                            </a>
                        </div>
                        <div class="bg-red-500 p-1 rounded-md">
                            <form action="/dashboard/post/{{ $post->slug }}" method="POST"
                                class="flex justify-center">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Are you sure to delete this post?')">
                                    <svg class="w-6 h-6 text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <h1 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900  lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                    <a href="/posts?category={{ $post->category->slug }}" class=" mb-4 lg:mb-6 hover:opacity-75">
                        <span
                            class="bg-{{ $post->category->color }}-100 text-black text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            {{ $post->category->name }}
                        </span>
                    </a>
                </header>
                <div>
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}">
                    @endif
                </div>
                {!! $post->body !!}
                <address class="flex items-center not-italic  mt-10">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        {{-- <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos"> --}}
                        <div>
                            <a href="/posts?user={{ $post->user->username }}" rel="user "
                                class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{ $post->user->name }}</a>
                            {{-- <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator & CEO
                                    Flowbite</p> --}}
                            <p></p>
                            <p class="text-base text-gray-500 dark:text-gray-400">
                                {{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </address>
            </article>
        </div>
    </main>







</x-layout-dashboard>
