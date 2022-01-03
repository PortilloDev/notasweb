<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Previsualizacion extends Component
{
    public $post;
    public $entrada_id;
    public $posts;

    public $open_view = false;

    public function mount()
    {
        $this->posts = Post::all();
       
    }
    
    public function render()
    {
       
        return view('livewire.previsualizacion');
    }

    public function view(Post $post) 
    {
        $this->post = $post;
        $this->open_view = true;
    }
}
