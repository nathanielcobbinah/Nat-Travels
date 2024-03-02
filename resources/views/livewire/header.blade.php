<!-- resources/views/livewire/header-component.blade.php -->

<div class="mt-7 relative">
    @if ($featuredPost)
        <div class="relative flex items-center">
            <div class="w-full h-64 relative">
                @if ($featuredPost->thumbnail)
                    <img src="{{ asset('storage/' . $featuredPost->thumbnail) }}" alt="{{ $featuredPost->title }}" class="w-full h-full object-cover">
                @endif
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center bg-black bg-opacity-50 p-6 w-full">
                    <h1 class="text-6xl font-semibold mb-2">{{ $featuredPost->title }}</h1>
                    <p class="text-gray-600 line-clamp-3">{{ $featuredPost->content }}</p>
                    <p class="text-blue-500">{{ $featuredPost->category->name }}</p>
                    <em class="text-gray-400">Created on: {{ $featuredPost->created_at }}</em>
                    <a href="{{ route('posts.show', $featuredPost->id) }}" class="text-blue-600 hover:underline block mt-2">Read More</a>
                </div>
            </div>
        </div>
    @else
        <p class="text-gray-600">No featured post available.</p>
    @endif
    {{-- <p class="text-xl mt-4">Welcome to our Travel Blog! Explore the world with our exciting travel stories.</p> --}}
</div>
