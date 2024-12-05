<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class PostComponent extends Component
{
    public $posts, $post, $title, $content, $post_id, $category_id, $categories, $createForm = false, $searchTitle, $searchContent, $editForm = false, $editTitle, $editContent, $editCategory_id;
    public $isUpdate = false;

    public $rules = [
        "category_id" => 'required',
        'title' => 'required|min:5',
        'content' => 'required',
        "editCategory_id" => 'required',
        'editTitle' => 'required|min:5',
        'editContent' => 'required'
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function mount()
    {
        $this->all();
    }

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.post-component', ['categories' => $this->categories]);
    }


    public function changeCreate()
    {
        $this->createForm = !$this->createForm;
    }

    public function all()
    {
        $this->posts = Post::orderBy('id', 'desc')->get();
        return $this->posts;
    }

    public function store()
    {
        $post = $this->validate();
        Post::create([
            'category_id' =>$post['category_id'],
            'title' =>$post['title'],
            'content' =>$post['content'],
        ]);
        session()->flash('message', 'Post Created Successfully.');
        $this->reset(['category_id', 'title', 'content', 'isUpdate', 'createForm']);
        $this->all();
    }

    public function edit(Post $post)
    {
        $this->editForm = $post->id;
        $this->editCategory_id = $post->category_id;
        $this->editTitle = $post->title;
        $this->editContent = $post->content;
        $this->all();
    }

    public function update(Post $post)
    {
        $validPost = $this->validate();
        $post->update(['category_id' => $validPost['editCategory_id'], 'title' => $validPost['editTitle'], 'content' => $validPost['editContent']]);
        session()->flash('message', 'Post Updated Successfully.');
        $this->reset(['editTitle', 'editContent', 'editCategory_id', 'editForm']);
        $this->all();
    }

    public function delete(Post $post)
    {
        $post->delete();
        session()->flash('message', 'Post Deleted Successfully.');
        $this->all();
    }

    public function search()
    {
        $this->posts = Post::where("title", "LIKE", "{$this->searchTitle}%")
            ->where("content", "LIKE", "{$this->searchContent}%")
            ->get();
    }
}
