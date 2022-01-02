<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Previsualizacion extends Component
{
    public $entrada = null;
    public $posts;

    public function mount()
    {
        $this->posts = Post::all();
    }
    
    public function render()
    {
        return view('livewire.previsualizacion', [
            'entrada' => $this->entrada,
        ]);
    }

    public function dehydrateFoo($value)
    {
        dd($value);
        $this->entrada = Post::where('id', $value)->first();
    }
    public function viewPost($post_id)
    {
    }
}
