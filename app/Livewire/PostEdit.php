<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostEdit extends Component
{
    use WithFileUploads;

    public $post;
    public $title;
    public $content;
    public $thumbnail;
    public $category_id;
    public $categories;

    public function mount($postId)
    {
        $this->post = Post::findOrFail($postId);
        $this->title = $this->post->title;
        $this->content = $this->post->content;
        $this->thumbnail = $this->post->thumbnail;
        $this->category_id = $this->post->category_id;
        $this->categories = Category::all();
    }
    public function updatePost()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'thumbnail' => 'max:2048',
            'category_id' => 'required|exists:categories,id'
        ]);

        $thumbnailPath = $this->thumbnail;

        // Check if $this->thumbnail is an instance of UploadedFile
        if ($this->thumbnail instanceof \Illuminate\Http\UploadedFile) {
            $thumbnailPath = $this->thumbnail->store('thumbnails', 'public');
        }
    

        $this->post->update([
            'title' => $this->title,
            'content' => $this->content,
            'category_id' => $this->category_id,
            'thumbnail' => $thumbnailPath,
        ]);


        session()->flash('message', 'Post updated successfully');
        // $this->emit('postUpdated');
        return redirect()->route('posts.show', $this->post->id);
    }
    
    public function render()
    {
        return view('livewire.post-edit');
    }
}
