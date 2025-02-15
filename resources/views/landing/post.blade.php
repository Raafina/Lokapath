<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">

                    <h1 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900  lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                    <a href="/posts?category={{ $post->category->slug }}" class=" mb-4 lg:mb-6 hover:opacity-75">
                        <span
                            class="bg-{{ $post->category->color }}-100 text-black text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            {{ $post->category->name }}
                        </span>
                    </a>
                </header>
                <div class="mx-auto mb-3">
                    <img src="{{ asset('storage/' . $post->image) }}">
                </div>
                {!! $post->body !!}

                <address class="flex items-center not-italic  mt-10">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        {{-- <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos"> --}}
                        <div>
                            <a href="/posts?user={{ $post->user->username }}" rel="user"
                                class="text-xl font-bold text-gray-900 dark:text-white no-underline hover:underline hover:text-black">{{ $post->user->name }}</a>
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
</x-layout>
