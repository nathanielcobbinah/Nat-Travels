<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CommentSection extends Component
{
    public $post;
    public $name;
    public $content;

    protected $rules = [
        'name' => 'required|string',
        'content' => 'required|string',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
    }
    
    public function submitComment()
    {
        $this->validate();

        $this->post->comments()->create([
            'name' => $this->name,
            'content' => $this->content,
        ]);

        $this->reset(['name', 'content']);
        // $this->emit('commentAdded');
    }
    
    public function render()
    {
        return view('livewire.comment-section', [
            'comments' => $this->post->comments()->latest()->get()
        ]);
    }
}
