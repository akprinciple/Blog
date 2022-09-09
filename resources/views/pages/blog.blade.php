<x-layout>
    <x-header/>
    <h1 class="text-2xl font-semibold mt-3 text-center">Welcome to blog section</h1>
    <p class="text-base"></p>

    <div class="max-w-6xl mx-auto">
        <a href="{{ route('blog.index') }}" class="btn bg-gray-500 mb-2 inline-block text-gray-50 hover:bg-gray-600">Create Blog Post</a>
        <hr class="mt-2">
    </div>

    <div></div>
</x-layout>