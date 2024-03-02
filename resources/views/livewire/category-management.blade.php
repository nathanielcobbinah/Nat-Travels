<!-- resources/views/livewire/category-management.blade.php -->

<div class="max-w-xl mx-auto mt-8 p-6 bg-blue-900 border rounded-md shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Create a New Category</h2>

    <form wire:submit.prevent='createCategory'>
        <div class="mb-4">
            <label for="categoryName" class="block text-sm font-medium text-gray-700">New Category:</label>
            <input type="text" wire:model='categoryName' id="categoryName" placeholder="Enter category name" class="mt-1 p-2 border rounded-md w-full">
            @error('categoryName') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Create Category</button>
    </form>

    <ul class="mt-4">
        @foreach ($categories as $category)
            <li class="flex justify-between items-center mb-2">
                <span>{{ $category->name }}</span>
                <button wire:click='deleteCategory({{ $category->id }})' class="bg-red-500 text-white py-1 px-2 rounded-md">Delete</button>
            </li>
        @endforeach
    </ul>
</div>
