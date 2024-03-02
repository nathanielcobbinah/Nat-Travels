<div class="flex flex-col md:flex-row mt-10 ">
    <div class="md:w-3/4 p-4 mr-10 ring-1 ring-blue-900">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        @if ($post->thumbnail)
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="w-64 h-48 object-cover mb-4">
        @endif
        <p class="mb-4">{{ $post->content }}</p>
        <p class="mb-4 font-bold">Category: {{ $post->category->name }}</p>

        {{-- @auth --}}
        <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-600 hover:underline mr-4">Edit Post</a>
        <button wire:click='deletePost({{ $post->id }})' class="text-red-600 hover:underline">Delete Post</button>

        {{-- @endauth --}}


    <livewire:comment-section :post="$post" />

        

        <h2 class="text-2xl font-bold mt-8 mb-4">Related Posts</h2>

        <div class="mb-4 flex flex-row md:flex-row border p-4">
            @foreach ($relatedPosts as $relatedPost)
                <div class="flex flex-col items-center gap-3 border-r pr-4 w-48 ">
                    <a href="{{ route('posts.show', $relatedPost->id) }}" class="text-blue-600 hover:underline mb-2 md:mb-0">{{ $relatedPost->title }}</a>
                    <img src="{{ asset('storage/' . $relatedPost->thumbnail) }}" alt="" class="w-full h-24 object-fit">
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
            
            
        {{-- </div>         --}}
        
        
    </div>
</div>
