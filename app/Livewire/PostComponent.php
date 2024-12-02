<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class PostComponent extends Component
{
    public $posts, $title, $content, $post_id, $category, $categories, $createForm=false,$searchTitle,$searchContent,$editForm=false,$editTitle,$editContent,$editCategory;
    public $isUpdate = false;

    public function mount(){
        $this->all();
    }

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.post-component');
    }


    public function changeCreate() {
        $this->createForm=!$this->createForm;
    }

    public function all()
    {
        $this->posts = Post::orderBy('id', 'desc')->get();
        return $this->posts;
    }

    public function store()
    {
        Post::create([
            'category_id' => $this->category,
            'title' => $this->title,
            'content' => $this->content,
        ]);
        session()->flash('message', 'Post Created Successfully.');
        $this->reset(['category', 'title', 'content', 'isUpdate','createForm']);
        $this->all();
    }
    
    public function edit(Post $post)
    {
        $this->editForm = $post->id;
        $this->editCategory = $post->category_id;
        $this->editTitle = $post->title;
        $this->editContent = $post->content;
        $this->all();
        
    }
    
    public function update(Post $post)
    {
        $post->update([
            'category_id' =>$this->editCategory,
            'title' => $this->editTitle,
            'content' => $this->editContent
        ]);
        session()->flash('message', 'Post Updated Successfully.');
        $this->reset(['editTitle', 'editContent', 'editCategory', 'editForm']);
        $this->all();
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        session()->flash('message', 'Post Deleted Successfully.');
        $this->all();
    }

    public function search(){
        $this->posts = Post::where("title","LIKE","{$this->searchTitle}%")
        ->where("content","LIKE","{$this->searchContent}%")
        ->get();
    }
}
