<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{
    public $posts;
    public $categories;
    public $recentPosts;

    public function mount() 
    {
        $this->posts = Post::latest()->limit(6)->get();
    }
    
    public function render()
    {
        $this->categories = Category::take(5)->get();
        $this->recentPosts = Post::take(5)->get();
        
        return view('livewire.post-list', [
            'categories' => $this->categories,
            'recentPosts' => $this->recentPosts,
        ]);
    }
}
