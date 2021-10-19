<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.search');
    }
    //propiedades computadas
    public function getResultsProperty()
    {
        return Post::where('name', 'LIKE', '%' . $this->search . '%')->where('status', '2')->take(8)->get();
    }
}
