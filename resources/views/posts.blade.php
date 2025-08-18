<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="max-w-4xl mx-auto py-8">
        @foreach ($posts as $post)
            <article class="mb-12 border-b border-gray-200 pb-10">
                <div class="mb-4">
                    <div class="flex items-center space-x-2 mb-2">
                        <img src="{{ $post->author_image }}"
                            alt="Author" class="w-10 h-10 rounded-full">
                        <div>
                            <h3 class="text-sm font-medium"><a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a></h3>
                            <p class="text-xs text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <h2 class="text-2xl font-bold mb-2"><a href="/posts/{{ $post->slug}}" class="text-gray-900 hover:underline">{{ $post->title }}</a></h2>
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
