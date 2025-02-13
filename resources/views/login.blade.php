<x-layout-auth>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class=" dark:bg-gray-900 py-4 md:py-0">
        <div class="flex flex-col items-center justify-center md:px-6 md:py-8 mx-auto md:h-screen lg:py-10">

            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    {{-- if register success, toast success --}}
                    @if (session('success'))
                        <div id="toast-interactive"
                            class="w-full py-2 px-3 text-gray-500  rounded-lg border 
                            {{ session('success') ? 'border-green-500 bg-green-50' : 'bg-white' }} dark:bg-gray-800 dark:text-gray-400"
                            role="alert">
                            <div class="flex">
                                <div class=" text-sm font-normal">
                                    <div class=" text-sm text-green-700 font-normal">{{ session('success') }}</div>
                                </div>
                                <button type="button"
                                    class="ms-auto -mx-1.5 -my-1.5  items-center justify-center shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 p-1.5  inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                    data-dismiss-target="#toast-interactive" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endif
                    {{-- if login failed, toast error --}}
                    @if (session('loginError'))
                        <div id="toast-interactive"
                            class="w-full py-2 px-3 text-gray-500  rounded-lg border 
                            {{ session('loginError') ? 'border-red-500 bg-red-50' : 'bg-white' }} dark:bg-gray-800 dark:text-gray-400"
                            role="alert">
                            <div class="flex">
                                <div class=" text-sm font-normal">
                                    <div class="text-sm text-red-700 font-normal">{{ session('loginError') }}</div>
                                </div>
                                <button type="button"
                                    class="ms-auto -mx-1.5 -my-1.5  items-center justify-center shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 p-1.5  inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                    data-dismiss-target="#toast-interactive" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endif

                    <form class="space-y-4 " action="/login" method="POST">
                        @csrf
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Username</label>
                            <input type="text" name="username" id="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600
                                 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                 placeholder:text-gray-400  {{ $errors->has('username') ? 'bg-red-100 border-red-500' : 'bg-gray-50 border-gray-300' }}"
                                placeholder="user_name" required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 
                                focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                placeholder:text-gray-400
                                 {{ $errors->has('password') ? 'bg-red-100 border-red-500' : 'bg-gray-50 border-gray-300' }}"
                                required="">
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
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none 
                            focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 
                            dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                            in</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="/register"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout-auth>
