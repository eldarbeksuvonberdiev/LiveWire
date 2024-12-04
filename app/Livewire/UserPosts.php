<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\LikeDislike;
use App\Models\Post;
use App\Models\View;
use Livewire\Component;

class UserPosts extends Component
{
    public $posts, $post, $selectedPost = false, $views, $likes, $dislikes, $like, $dislike, $likedBy, $disLikedBy, $comments, $commentCount;

    public $user_name, $body, $replyTo, $replyUser_name, $replyBody;

    public function mount()
    {
        $this->posts = Post::all();
    }

    public function render()
    {
        return view('livewire.user-posts')->layout('components.layouts.user_main');
    }

    public function showPost(Post $post)
    {
        $this->post = $post;
        $this->selectedPost = $post->id;
        View::create(['post_id' => $this->selectedPost,'user_ip' => request()->ip()]);
        $this->likedBy = LikeDislike::where('post_id', $this->selectedPost)->where('user_ip', request()->ip())->where('value', 1)->first();
        $this->disLikedBy = LikeDislike::where('post_id', $this->selectedPost)->where('user_ip', request()->ip())->where('value', 0)->first();
        $this->views = View::where('post_id', $this->selectedPost)->count();
        $this->comments = Comment::where('post_id', $this->selectedPost)->where('reply_to', 0)->get();
        $this->commentCount = Comment::where('post_id', $this->selectedPost)->where('reply_to', 0)->count();
    }

    public function back()
    {
        $this->reset(['post', 'selectedPost', 'likedBy', 'disLikedBy', 'views', 'comments', 'commentCount']);
    }

    public function likePost()
    {
        $this->like = LikeDislike::where('user_ip', request()->ip())
            ->where('post_id', $this->selectedPost)
            ->first();

        if (!$this->like) {
            LikeDislike::create([
                'post_id' => $this->selectedPost,
                'user_ip' => request()->ip(),
                'value' => 1
            ]);
            $this->likedBy = LikeDislike::where('post_id', $this->selectedPost)->where('user_ip', request()->ip())->where('value', 1)->first();
        } elseif ($this->like->value == 1) {
            $this->like->delete();
            $this->likedBy = LikeDislike::where('post_id', $this->selectedPost)->where('user_ip', request()->ip())->where('value', 1)->first();
        } else {
            $this->like->update(['value' => 1]);
            $this->likedBy = LikeDislike::where('post_id', $this->selectedPost)->where('user_ip', request()->ip())->where('value', 1)->first();
            $this->disLikedBy = LikeDislike::where('post_id', $this->selectedPost)->where('user_ip', request()->ip())->where('value', 0)->first();
        }
    }

    public function dislikePost()
    {
        $this->dislike = LikeDislike::where('user_ip', request()->ip())
            ->where('post_id', $this->selectedPost)
            ->first();

        if (!$this->dislike) {
            LikeDislike::create([
                'post_id' => $this->selectedPost,
                'user_ip' => request()->ip(),
                'value' => 0
            ]);
            $this->disLikedBy = LikeDislike::where('post_id', $this->selectedPost)->where('user_ip', request()->ip())->where('value', 0)->first();
        } elseif ($this->dislike->value == 0) {

            $this->dislike->delete();
            $this->disLikedBy = LikeDislike::where('post_id', $this->selectedPost)->where('user_ip', request()->ip())->where('value', 0)->first();
        } else {

            $this->dislike->update(['value' => 0]);
            $this->disLikedBy = LikeDislike::where('post_id', $this->selectedPost)->where('user_ip', request()->ip())->where('value', 0)->first();
            $this->likedBy = LikeDislike::where('post_id', $this->selectedPost)->where('user_ip', request()->ip())->where('value', 1)->first();
        }
    }

    public function commentToPost()
    {
        // dd($this->user_name,$this->body);

        Comment::create([
            'post_id' => $this->selectedPost,
            'reply_to' => 0,
            'user_name' => $this->user_name,
            'body' => $this->body
        ]);
        $this->reset(['user_name', 'body']);
        $this->comments = Comment::where('post_id', $this->selectedPost)->where('reply_to', 0)->get();
        $this->commentCount = Comment::where('post_id', $this->selectedPost)->where('reply_to', 0)->count();
    }

    public function reply(Comment $comment)
    {
        $this->replyTo = $comment->id;
    }

    public function replyTo()
    {
        dd($this->replyUser_name, $this->replyBody);
    }
}
