<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryComponent extends Component
{

    public $categories, $createForm = false, $name, $editForm = false, $editName, $searchName;

    public function mount()
    {
        $this->all();
    }

    public function render()
    {
        return view('livewire.category-component');
    }

    public function all()
    {
        $this->categories = Category::all();
        return $this->categories;
    }

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
        $this->all();
    }

    public function destroy(Category $category)
    {
        $category->delete();
        $this->all();
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
        $this->all();
        $this->reset(['editForm', 'editName']);
    }

    public function search()
    {
        // dd($this->searchName);
        $this->categories = Category::where("name", "LIKE", "%{$this->searchName}%")->get();
    }
}
