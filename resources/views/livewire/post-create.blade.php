<!-- resources/views/livewire/post-create.blade.php -->

<div class="max-w-xl mx-auto mt-8 p-6 bg-blue-900 border rounded-md shadow-md">
    <h2 class="p-2 text-center uppercase text-gray-500 font-bold">Add a New Post</h2>
    <form wire:submit.prevent="savePost" enctype="multipart/form-data">
        <div class="mb-4">
            <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail:</label>
            <input type="file" wire:model="thumbnail" id="thumbnail" class="mt-1 p-2 border rounded-md w-full">
            @error('thumbnail') <span class="text-red-500">{{ $message }}</span> @enderror

            @if ($thumbnail)
                <img src="{{ $thumbnail->temporaryUrl() }}" alt="" class="mt-2 rounded-md shadow-md" style="width: 250px; height: 200px">
            @endif
        </div>
        
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
            <input wire:model='title' type="text" id="title" placeholder="Enter post title" class="mt-1 p-2 border rounded-md w-full">
            @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content:</label>
            <textarea wire:model='content' placeholder="Enter the post content" id="content" cols="20" rows="5" class="mt-1 p-2 border rounded-md w-full"></textarea>
            @error('content') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">Category:</label>
            <select wire:model='category_id' id="category_id" class="mt-1 p-2 border rounded-md w-full">
                <option value="">Select a category</option>
                @if ($categories)
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                @endif
            </select>
            @error('category_id') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Create Post</button>

        <div wire:loading>
            <em class="mt-2 text-gray-600">Creating post...</em>
        </div>
    </form>
    <hr class="m-3">
    {{-- <livewire:category-management /> --}}
    
</div>
