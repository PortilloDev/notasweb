<?php

namespace App\Http\Livewire;

use App\Models\Documentation;
use Livewire\Component;

class SearchDocument extends Component
{
    public $search;
    
    public function render()
    {
        return view('livewire.search-document');
    }
    
    public function getResultsProperty()
    {
        return Documentation::where('title', 'LIKE', '%' . $this->search . '%')->take(8)->get();
    }
}   
