<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
        <div class="py-8 px-4 mx-auto max-w-screen-md text-center lg:py-16 lg:px-6">
            <form action="#">
                <div class="items-center mx-auto mb-3 space-y-4 sm:flex sm:space-y-0">
                    <div class="relative w-full">
                        <label for="email"
                            class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                            address</label>
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </div>
                        <input type="email" id="email"
                            class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Enter your email" required>
                    </div>
                    <div>
                        <button type="submit"
                            class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-blue-700 border-blue-700 sm:rounded-none sm:rounded-r-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Subscribe
                        </button>
                    </div>
                </div>
            </form>
        </div>

    <div class="max-w-4xl mx-auto py-4">
        @foreach ($posts as $post)
            <article class="mb-12 border-b border-gray-200 pb-10">
                <div class="mb-4">
                    <div class="flex items-center space-x-2 mb-2">
                        <img src="{{ $post->author_image }}" alt="Author" class="w-10 h-10 rounded-full">
                        <div>
                            <h3 class="text-sm font-medium"><a href="/authors/{{ $post->author->username }}"
                                    class="hover:underline">{{ $post->author->name }}</a></h3>
                            <p class="text-xs text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <h2 class="text-2xl font-bold mb-2"><a href="/posts/{{ $post->slug }}"
                            class="text-gray-900 hover:underline">{{ $post->title }}</a></h2>
                    <p class="text-gray-700 mb-4 text-justify">{{ Str::limit($post->body, 150) }}</p>
                    <div class="flex items-center">
                        <div class="flex items-center space-x-4">
                            <p class="text-gray-500 text-xs">Tags:</p>
                            <a href="/categories/{{ $post->category->slug }}"
                                class="bg-gray-300 text-gray-800 text-xs py-1 px-3 rounded-full hover:bg-gray-800 hover:text-white">{{ $post->category->tags }}</a>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
    <div class="mt-8 flex justify-center">
        <nav class="flex items-center space-x-2">
            <a href="#"
                class="px-3 py-2 rounded border border-gray-300 text-gray-700 hover:bg-gray-50">Previous</a>
            <a href="#" class="px-3 py-2 rounded border border-gray-300 bg-gray-800 text-white">1</a>
            <a href="#" class="px-3 py-2 rounded border border-gray-300 text-gray-700 hover:bg-gray-50">2</a>
            <a href="#" class="px-3 py-2 rounded border border-gray-300 text-gray-700 hover:bg-gray-50">3</a>
            <a href="#" class="px-3 py-2 rounded border border-gray-300 text-gray-700 hover:bg-gray-50">Next</a>
        </nav>
    </div>
</x-layout>
