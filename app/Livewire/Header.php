<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Header extends Component
{
    public $featuredPost;
    
    public function mount() 
    {
        $this->featuredPost = Post::latest()->first();
    }
    
    public function render()
    {
        return view('livewire.header');
    }
}
