<x-layout>
    <x-header/>
    <h1 class="text-2xl font-semibold mt-3 text-center">Welcome to blog section</h1>
    <p class="text-base"></p>

    <div class="max-w-6xl mx-auto">
        <a href="{{ route('blog.create') }}" class="btn bg-gray-500 mb-2 inline-block text-gray-50 hover:bg-gray-600">Create Blog Post</a>
        <hr class="mt-2">
    </div>
    <h1 class="text-center text-4xl mt-4">Blog Posts</h1>
    @if (session()->has('success'))
        <div id="alertSuccess" class="max-w-6xl mx-auto bg-blue-200 border-blue-300 py-2 px-5 rounded border text-blue-900">
            {{ session('success') }}
           <script>
                document.querySelector('#alertSuccess').addEventListener('load', () => {
                    setTimeout(() => {
                        document.getElementById('alertSuccess').style.display ="none"
                    }, 3000);
                })
           </script>
        </div>
    @endif
    <div class="max-w-6xl mx-auto flex flex-wrap justify-center mt-4">
        @foreach ($posts as $item)
        <div class="card w-1/3 p-3">
            <h5 class="text-center text-gray-700 font-semibold border-b p-2">{{ $item->title}}</h5>
            <p class="pb-4 text-justify">
                {{ $item->description}}
            </p>
            {{-- <br> --}}
            <a href="" class="btn bg-gray-500 text-white">Edit</a>
        </div>

        @endforeach
    </div>
    <div class="max-w-6xl mx-auto px-5 py-2 border">
        {{-- {!! $posts->links() !!} --}}
        {{ $posts->links() }}
    </div>
</x-layout>