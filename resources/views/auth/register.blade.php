<x-layout-auth>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class=" dark:bg-gray-900 py-4 md:py-0">
        <div class="flex flex-col items-center justify-center md:px-6 md:py-8 mx-auto md:h-screen lg:py-10">

            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Register account
                    </h1>
                    <form class="space-y-4 " action="/register" method="post">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Name</label>
                            <input type="name" name="name" id="name"
                                class="bg-gray-50 border border-gray-300  text-gray-900 placeholder:text-gray-400 rounded-lg
                                 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                                 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                                 dark:focus:ring-blue-500 dark:focus:border-blue-500 
                                 {{ $errors->has('name') ? 'bg-red-100 border-red-500' : 'bg-gray-50 border-gray-300' }}"
                                placeholder="full name" required value="{{ old('name') }}">
                            @error('name')
                                <p class="text-sm text-red-600 mt-1"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900  dark:text-white">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900  placeholder:text-gray-400 rounded-lg 
                                focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                                 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                                 dark:focus:ring-blue-500 dark:focus:border-blue-500
                                 {{ $errors->has('email') ? 'bg-red-100 border-red-500' : 'bg-gray-50 border-gray-300' }}"
                                placeholder="user@example.com" required value="{{ old('email') }}">
                            @error('email')
                                <p class="text-sm text-red-600 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="username"
                                class="block mb-2 text-sm font-medium text-gray-900  dark:text-white">Username</label>
                            <input type="username" name="username" id="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 placeholder:text-gray-400 rounded-lg 
                                focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                                dark:focus:ring-blue-500 dark:focus:border-blue-500
                                {{ $errors->has('username') ? 'bg-red-100 border-red-500' : 'bg-gray-50 border-gray-300' }}"
                                placeholder="user_name" required value="{{ old('username') }}">
                            @error('username')
                                <p class="text-sm text-red-600 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900  dark:text-white">Password</label>
                            <input type="password" name="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900  placeholder:text-gray-400 rounded-lg
                                 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                                 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                                 dark:focus:ring-blue-500 dark:focus:border-blue-500
                                 {{ $errors->has('password') ? 'bg-red-100 border-red-500' : 'bg-gray-50 border-gray-300' }}"
                                placeholder="*****" required>
                            @error('password')
                                <p class="text-sm
                                text-red-600 mt-1">{{ $message }}
                                </p>
                            @enderror

                        </div>
                        {{-- <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="#"
                                class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot
                                password?</a>
                        </div> --}}
                        <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                            Up</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="/login"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign in</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout-auth>
