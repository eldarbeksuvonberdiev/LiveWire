<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryComponent extends Component
{

    public $categories, $createForm = false, $name, $editForm = false, $editName, $searchName;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.category-component');
    }

    // public function all()
    // {
    //     $this->categories = Category::all();
    //     return $this->categories;
    // }

    public function changeCreateForm()
    {
        $this->createForm = !$this->createForm;
    }

    public function saveCategory()
    {
        if (!empty($this->name)) {
            Category::create(['name' => $this->name]);
        }
        $this->reset(['name', 'createForm']);
    }

    public function destroy(Category $category)
    {
        $category->delete();
    }

    public function edit(Category $category)
    {
        $this->editForm = $category->id;
        $this->editName = $category->name;
        $this->all();
    }

    public function update()
    {
        $category = Category::findOrFail($this->editForm);
        $category->update([
            'name' => $this->editName
        ]);
        $this->reset(['editForm', 'editName']);
    }

    public function search()
    {  
        $this->categories = Category::where("name","LIKE","{$this->searchName}%")->get();
    }
}
