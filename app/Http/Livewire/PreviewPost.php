<?php

namespace App\Http\Livewire;
use App\Models\Post;
use Livewire\Component;

class PreviewPost extends Component
{
    public $post;
    public $open = false;
    public $posts;

    public function mount($posts)
    {
        $this->posts = $posts;
    }
    public function render()
    {
        return view('livewire.preview-post');
    }
    public function viewModal($postId)
    {
        
        $this->post = Post::find($postId);
        $this->open = true;
    }
}
