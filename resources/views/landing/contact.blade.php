<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-white rounded-lg shadow-md py-6">

        <h2 class="text-2xl font-bold text-center">Contact Us</h2>
        <form id="contactForm" class="space-y-4 max-w-xl px-4  mx-auto" action="/login" method="POST">
            @csrf
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Email</label>
                <input type="text" name="email" id="email"
                    class="bg-gray-50 border  text-gray-900 rounded-lg focus:ring-primary-600
                                 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                 placeholder:text-gray-400  border-gray-300"
                    placeholder="user@example.com" required="">
            </div>
            <div>
                <label for="text"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Message</label>
                <textarea id="message" name="message" required
                    class="bg-gray-50 border  text-gray-900 rounded-lg focus:ring-primary-600
                                 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                 placeholder:text-gray-400  border-gray-300 h-32"
                    placeholder="lorem ipsum dolor, sit amet consectetur adipisicing elit..."></textarea>
            </div>

            <button type="submit"
                class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none 
                            focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 
                            dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
                Message</button>

        </form>

        <div id="formMessage" class="text-center mt-4 text-base font-semibold dark:text-white text-dark"></div>
    </div>
    <script src="{{ asset('js/contactForm.js') }}"></script>
</x-layout>
