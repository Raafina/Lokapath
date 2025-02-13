<x-layout-dashboard>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="ms-2 mb-6">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900"> Welcome {{ $name }}</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white  md:px-10 py-4 rounded-md shadow-md text-center">
            <h4 class="md:text-2xl font-bold mb-1">Total Post</h4>
            <p class="md:text-2xl">{{ $postCount }}</p>
        </div>
        <a href="/dashboard/posts"
            class="flex flex-row items-center justify-center bg-gray-800 hover:opacity-75 text-white px-10 py-8 rounded-lg shadow-md w-full md:text-2xl font-bold">Manage
            Posts
        </a>
    </div>
</x-layout-dashboard>
