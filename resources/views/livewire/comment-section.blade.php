<!-- resources/views/livewire/comment-section.blade.php -->

<div class="mt-8">
    <h3 class="text-lg font-semibold mb-4">Comments</h3>

    <form wire:submit.prevent="submitComment" class="mb-6">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
            <input wire:model="name" type="text" id="name" placeholder="Your Name" class="mt-1 p-2 border rounded-md w-full">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Comment:</label>
            <textarea wire:model="content" id="content" cols="30" rows="5" placeholder="Your Comment" class="mt-1 p-2 border rounded-md w-full"></textarea>
            @error('content') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Submit Comment</button>
    </form>

    <div>
        @foreach ($comments as $comment)
            <div class="mb-4 p-4 bg-gray-100 border rounded-md">
                <strong class="block text-lg font-semibold mb-2">{{ $comment->name }}</strong>
                <p class="text-gray-700">{{ $comment->content }}</p>
                <small class="text-gray-500 block">{{ $comment->created_at->diffForHumans() }}</small>
            </div>
        @endforeach
    </div>
</div>
