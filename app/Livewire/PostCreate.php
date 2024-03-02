<?php

namespace App\Livewire;
use Livewire\WithFileUploads;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class PostCreate extends Component
{
    use WithFileUploads;
    public $title;
    public $content;
    public $thumbnail;
    public $category_id;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function savePost() 
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'thumbnail' => 'max:2048',
            'category_id' => 'required|exists:categories,id'
        ]);

        // $thumbnailPath = null;

        if ($this->thumbnail) {
            $thumbnailPath = $this->thumbnail->store('thumbnails', 'public');
        }

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'category_id' => $this->category_id,
            'thumbnail' => $thumbnailPath
        ]);

        $this->reset();
        // session()->flash('message', 'Post created successfully');
        return redirect('/');

        // $this->emit('postCreated');
    }
    
    public function render()
    {
        return view('livewire.post-create');
    }
}