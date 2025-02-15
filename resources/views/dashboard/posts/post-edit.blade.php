<x-layout-dashboard>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="ms-2 mb-2 md:mb-6">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900"> {{ $title }} </h1>
    </div>

    <div class="bg-white rounded-md px-6 py-4 shadow-md">

        <form method="POST" action="/dashboard/post/{{ $post->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Title</label>
                <input type="title" id="title" name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                     dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                     dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder:text-gray-400
                    {{ $errors->has('title') ? 'bg-red-100 border-red-500' : 'bg-gray-50 border-gray-300' }}"
                    placeholder="title" value="{{ old('title', $post->title) }}" />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">

                <input type="slug" id="slug" name="slug"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                     dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                     dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder:text-gray-400
                     {{ $errors->has('slug') ? 'bg-red-100 border-red-500' : 'bg-gray-50 border-gray-300' }}"
                    placeholder="title-slug" readonly value="{{ old('slug', $post->slug) }}" />
                @error('slug')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="category"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                <select id="category" name="category_id"
                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 w-full focus:ring-blue-500 focus:border-blue-500 
                    dark:bg-gray-700 dark:border-gray-600 dark:text-white text-black
                    {{ $errors->has('category') ? 'bg-red-100 border-red-500' : 'bg-gray-50 border-gray-300' }}">
                    <option value="select" hidden>select category</option>
                    @foreach ($categories as $category)
                        @if (old('category_id', $post->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
                @error('category')
                    <p class="text-sm text-red-600 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-5 ">
                <div class="w-64">
                    @if ($post->image)
                        <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Image</p>
                        <img src="{{ asset('storage/' . $post->image) }}" id="img-preview">
                    @else
                        <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Preview
                        </p>
                        <img id="img-preview" class="w-1/2 h-auto mx-auto">
                    @endif
                </div>
                <label class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white"
                    for="small_size">Image</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                <input
                    class="block w-full pt-2 text-sm text-gray-900 border  rounded-lg 
                    cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700
                     dark:border-gray-600 dark:placeholder-gray-400 
                     {{ $errors->has('image') ? 'bg-red-100 border-red-500' : 'bg-gray-50 border-gray-300' }}"
                    id="img-input" type="file" name="image" onchange="previewImage()">
                @error('image')
                    <p class="text-sm text-red-600 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <p class="text-sm text-red-600 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <button type="submit"
                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Publish</button>
        </form>
    </div>

    <script src="{{ asset('js/utilsPost.js') }}"></script>
</x-layout-dashboard>
