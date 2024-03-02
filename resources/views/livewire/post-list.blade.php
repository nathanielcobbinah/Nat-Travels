<div class="mt-15">
    <livewire:header />

    
    
    <div class="main flex flex-col md:flex-row gap-3">
        <div class="md:w-3/4">
            <h1 class="text-3xl text-center font-semibold mt-6 mb-3">Latest Posts</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-4 mt-2">
                @foreach ($posts as $post)
                    <div class="bg-blue-900 p-4 rounded-md shadow-md">
                        <h2 class="text-lg font-semibold mb-2 text-center text-gray-300">{{ $post->title }}</h2>
                        @if ($post->thumbnail)
                            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-32 object-cover mb-2">
                        @endif
                        {{-- <p class="text-gray-600">{{ $post->content }}</p> --}}
                        <p class="text-gray-400 line-clamp-3">{{ $post->content }}</p>

                        <p class="text-blue-500">{{ $post->category->name }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="text-blue-600 hover:underline block mt-2">Read More</a>
                        
                        <em class="text-gray-400 text-sm">Created on: {{ $post->created_at }}</em>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="md:w-1/4 bg-blue-950 p-4 ring-1 ring-blue-900 mt-8 md:mt-0 hidden lg:block">

            <!-- Navigation Links -->
            <nav class="mb-4">
                <ul>
                    <li><a href="{{ route('posts') }}" class="text-blue-500">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-blue-500">About</a></li>
                    <li><a href="{{ route('contact') }}" class="text-blue-500">Contact</a></li>
                    <!-- Add more links as needed -->
                </ul>
            </nav>
        
            <!-- Search Form -->
            <form action="" method="GET" class="mb-4">
                <input type="text" name="query" placeholder="Search..." class="w-full p-2 border border-gray-300">
                <button type="submit" class="mt-2 bg-blue-500 text-white py-2 px-4 rounded">Search</button>
            </form>
        
            <!-- Categories -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Categories</h3>
                <ul>
                    @foreach($categories as $category)
                        <li><a href="" class="text-gray-600">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        
            <!-- Recent Posts -->
            <div>
                <h3 class="text-lg font-semibold mb-2">Recent Posts</h3>
                <ul>
                    @foreach($recentPosts as $post)
                        <li><a href="{{ route('posts.show', $post->id) }}" class="text-gray-600">{{ $post->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        
            <!-- Social Links -->
            <div class="mt-4">
                <h3 class="text-lg font-semibold mb-2">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-blue-500"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="text-blue-500"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="text-blue-500"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="text-blue-500"><i class="bx bxl-linkedin"></i></a>
                    <a href="#" class="text-blue-500"><i class="bx bxl-pinterest"></i></a>
                    <!-- Add more social links as needed -->
                </div>
            </div>
        </div>
    </div>
</div>