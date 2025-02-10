<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h3 class="text-3xl font-bold tracking-tight text-gray-900 mb-1">Judul Artikel</h3>
            <div class="text-base text-gray-500">
                <p>{{ $post->author }} | {{ $post->created_at->format('d-m-Y') }}</p>
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post->body, 150) }}
            </p>
            <a class="font-medium text-blue-500 hover:underline" href="">Read More &raquo;</a>
        </article>
    @endforeach

</x-layout>
