<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostDelete extends Component
{
    public $post;

    public function mount($postId)
    {
        $this->post = Post::findOrFail($postId);
    }

    public function deletePost()
    {
        $this->post->delete();
        return redirect()->back();
    }
    
    public function render()
    {
        return view('livewire.post-delete');
    }
}
