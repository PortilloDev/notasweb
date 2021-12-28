<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Documentation;

class SearchDocuments extends Component
{
    public $documentations;
    public $search;
    
    public function mount($documentations)
    {
        $this->documentations = $documentations;
    }

    public function render()
    {
        if($this->search != null) {
            $this->documentations = Documentation::where('title', 'like', '%'.$this->search.'%')->get();
        } elseif ($this->search == '') {
            $this->documentations = Documentation::all();
        }
        return view('livewire.search-documents', [
            'documentations' => $this->documentations,
        ]);
    }
}
