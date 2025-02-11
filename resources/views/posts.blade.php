<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/post/{{ $post->slug }}">
                <h3 class="text-3xl font-bold tracking-tight text-gray-900 mb-1 hover:underline">{{ $post->title }}</h3>
            </a>
            <div class="text-base ">
                <p>By <a href="/authors/{{ $post->author->username }}"
                        class="hover:underline text-gray-500">{{ $post->author->name }}</a> in
                    <a href="/categories/{{ $post->category->slug }}"
                        class="hover:underline text-gray-500">{{ $post->category->name }}</a> |
                    {{ $post->created_at->diffForHumans() }}
                </p>
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post->body, 150) }}
            </p>
            <a class="font-medium text-blue-500 hover:underline" href="/post/{{ $post->slug }}">Read More &raquo;</a>
        </article>
    @endforeach

</x-layout>
