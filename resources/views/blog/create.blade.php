<x-layout>
    <x-header/>
    <h1 class="text-2xl font-semibold mt-3 text-center">Welcome to blog section</h1>
    <p class="text-base"></p>

    <div class="max-w-6xl mx-auto">
        <a href="{{ route('blog.create') }}" class="btn bg-gray-500 mb-2 inline-block text-gray-50 hover:bg-gray-600">Create Blog Post</a>
        <hr class="mt-2">
    </div>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-semibold">Create new blog post</h1>
        {{-- @error('failed')
        <div class="text-red-500">{{ $message }}</div>
        @enderror --}}
        <form action="{{ route('blog.store') }}" method="post">
            @csrf
            <div class="my-2">
                <label for="title">Title</label>
                <input type="text" class="form-control" value="{{ old('title') }}" id="title" name="title">
                @error('title')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" class="">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <button class="btn bg-blue-500 hover:bg-blue-600 text-white">Submit</button>
            </div>
        </form>
    </div>
</x-layout>