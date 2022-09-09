<header>
    <nav class="flex w-full justify-between items-center py-2 px-7 bg-gray-800 text-white">
        <div class="logo text-2xl">LaravelBlog</div>
        <ul class="flex space-x-8">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('blog.index') }}">Blog</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
</header>