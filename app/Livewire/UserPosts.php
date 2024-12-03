<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\View;
use Livewire\Component;

class UserPosts extends Component
{
    public $posts,$post,$selectedPost = false,$views,$likes,$dislikes;

    public function mount(){
        $this->posts = Post::all();
    }

    public function render()
    {
        return view('livewire.user-posts');
    }

    public function showPost(Post $post){
        // dd($post);
        $this->post = $post;
        $this->selectedPost = $post->id;
        // $$this->views = View::where('')
    }
}
