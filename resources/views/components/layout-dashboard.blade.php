<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <link rel="icon" type="svg" href="{{ asset('LokapathLogo.svg') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <style>
        /* trix-toolbar [data-trix-butto] */
    </style>
    <title>Lokapath | CMS</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <main>
            <div>
                <nav class="fixed top-0 z-50 w-full border-b bg-gray-800 border-gray-700">
                    <div class="px-3 py-3 lg:px-5 lg:pl-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center justify-start rtl:justify-end">
                                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                                    aria-controls="logo-sidebar" type="button"
                                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                                    <span class="sr-only">Open sidebar</span>
                                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                        </path>
                                    </svg>
                                </button>
                                <a href="/home" class="flex ms-2 md:me-24">
                                    <img src="/lokapathLogo.svg" class="h-8 me-3" alt="Lokapath Logo" />
                                    <span
                                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">CMS
                                        Lokapath</span>
                                </a>
                            </div>
                            <div class="flex items-center">
                                <div class="flex items-center ms-3">
                                    {{-- <div>
                                        <button type="button"
                                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="w-8 h-8 rounded-full"
                                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                                alt="user photo">
                                        </button>
                                    </div> --}}
                                    <div class="z-50 hidden my-4 text-base list-nonedivide-y rounded-sm shadow-sm bg-gray-700 divide-gray-600"
                                        id="dropdown-user">
                                        <ul class="py-1" role="none">
                                            <li class="cursor-pointer">
                                                <form action="/logout" method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="block px-4 py-2 text-sm  text-gray-300 hover:bg-gray-600 hover:text-white"
                                                        role="menuitem">Sign out</button>
                                                </form>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <aside id="logo-sidebar"
                    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full  border-r sm:translate-x-0 bg-gray-800 border-gray-700"
                    aria-label="Sidebar">
                    <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-800">
                        <ul class="space-y-2 font-medium">
                            <li>
                                <a href="/dashboard"
                                    class="flex items-center p-2 text-white rounded-lg dark:text-white 
                                    hover:bg-gray-700 group {{ Request()->is('dashboard') ? 'bg-gray-700' : '' }}">
                                    <svg class="w-5 h-5 x transition duration-75 dark:text-gray-400 group-hover:text-white
                                     dark:group-hover:text-white {{ Request()->is('dashboard') ? 'text-white' : 'text-gray-500' }}"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 22 21">
                                        <path
                                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                        <path
                                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                    </svg>
                                    <span class="ms-3">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/posts"
                                    class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-700 group {{ Request()->is('dashboard/post*') ? 'bg-gray-700' : '' }}">
                                    <svg class="shrink-0 w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-white
                                     dark:group-hover:text-white {{ Request()->is('dashboard/post*') ? 'text-white' : 'text-gray-500' }}"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 18 18">
                                        <path
                                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                                    </svg>
                                    <span class="flex-1 ms-3 whitespace-nowrap">Posts</span>
                                </a>
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button
                                        class="flex w-full  p-2 text-red-500 rounded-lg dark:text-white
                                         hover:bg-gray-700 group ">
                                        <svg lass="shrink-0 w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-white
                                     dark:group-hover:text-white text-gray-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                                        </svg>

                                        <span class=" ms-3 whitespace-nowrap">Sign Out</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </aside>

                <div class="p-4 sm:ml-64">
                    <div class="py-4 md:p-4 rounded-lg dark:border-gray-700 mt-14">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
