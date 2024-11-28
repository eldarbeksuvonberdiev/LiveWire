<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostComponent extends Component
{
    public $posts, $title, $content, $post_id;
    public $isUpdate = false;

    protected $rules = [
        'title' => 'required',
        'content' => 'required',
    ];

    public function render()
    {
        $this->posts = Post::orderBy('id','desc')->get();
        return view('livewire.post-component');
    }


    public function store()
    {
        $this->validate();
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);
        session()->flash('message', 'Post Created Successfully.');
        $this->reset(['title','content','isUpdate']);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->post_id = $post->id;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->isUpdate = true;
    }

    public function update()
    {
        $this->validate();
        $post = Post::find($this->post_id);
        $post->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);
        session()->flash('message', 'Post Updated Successfully.');
        $this->reset(['title','content','post_id','isUpdate']);
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
