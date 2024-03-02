<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class PostDetail extends Component
{
    public $post;
    public $relatedPosts;
    public $recentPosts;
    public $categories;

    public function mount($postId)
    {
        $this->post = Post::findOrFail($postId);
        $this->loadRelatedPosts();
    }

    public function deletePost($postId)
    {
        $this->post->delete();
        return redirect('/');
    }

    public function loadRelatedPosts() 
    {
        $this->relatedPosts = Post::where('category_id', $this->post->category_id)
            ->where('id', '!=', $this->post->id)
            ->limit(5)
            ->get();
    }
    
    public function render()
    {
        $this->categories = Category::all();
        $this->recentPosts = Post::latest()->take(5)->get();

        return view('livewire.post-detail', [
            'categories' => $this->categories,
            'recentPosts' => $this->recentPosts,
        ]);
    }
}
