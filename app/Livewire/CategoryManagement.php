<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryManagement extends Component
{
    public $categories;
    public $categoryName;

    public function mount() 
    {
        $this->categories = Category::take(5)->get();
    }

    public function createCategory() 
    {
        $this->validate([
            'categoryName' => 'required|unique:categories,name'
        ]);

        Category::create([
            'name' => $this->categoryName
        ]);

        $this->categories = Category::all();

        $this->reset('categoryName');
    }

    public function deleteCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $category->delete();

        $this->categories = Category::all();
    }
    
    
    public function render()
    {
        return view('livewire.category-management');
    }
}
