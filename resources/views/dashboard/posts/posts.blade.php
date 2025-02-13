<x-layout-dashboard>
    <x-slot:title>{{ $title }}</x-slot:title>
    @if (session('success'))
        <div id="toast-interactive"
            class="w-full mb-6 py-2 px-3 text-gray-500  rounded-lg border 
                border-green-500 bg-green-50 dark:bg-gray-800 dark:text-gray-400"
            role="alert">
            <div class="flex">
                <div class=" text-sm font-normal">
                    <div class=" text-sm text-green-700 font-normal">{{ session('success') }}</div>
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5  items-center justify-center shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 p-1.5  inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-dismiss-target="#toast-interactive" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    <div class="grid grid-cols-2 mb-2 md:mb-0">
        <div class="ms-2 mb-2 md:mb-6">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900"> {{ $title }} </h1>
        </div>
        <div class="text-right">
            <a href="/dashboard/post/create"> <button
                    class="px-3 py-2 rounded-md bg-green-600 hover:opacity-75 text-white">New Post</button>
            </a>
        </div>
    </div>

    <div class="ms-2">
        {{ $posts->links() }}
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg  my-3 md:my-8">
        <table class="w-full text-sm text-left rtl:text-right  dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-800 text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="ps-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="py-4 hover:underline hover:cursor-pointer">
                            <a href="/dashboard/post/{{ $post->slug }}">{{ $post->title }}</a>
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->category->name }}
                        </td>
                        <td class="px-6 py-4 flex flex-row gap-2">
                            <div class="bg-gray-800 p-1 rounded-md hover:opacity-75">
                                <a href="/post/{{ $post->slug }}" class="flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="bg-yellow-500 p-1 rounded-md hover:opacity-75">
                                <a href="/dashboard/post/{{ $post->slug }}/edit">
                                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                                    </svg>
                                </a>
                            </div>

                            <div class="bg-red-500 p-1 rounded-md hover:opacity-75">
                                <form action="/dashboard/post/{{ $post->slug }}" method="POST"
                                    class="flex justify-center">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Are you sure to delete this post?')">
                                        <svg class="w-6 h-6 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <div class="flex flex-col justify-center">
                        <p class="text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">No post
                            found
                        </p>
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="ms-2 mb-8">
        {{ $posts->links() }}
    </div>

</x-layout-dashboard>
