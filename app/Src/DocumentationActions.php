<?php

namespace App\Src;

use App\Models\Documentation;
use App\Traits\Validates;

class DocumentationActions
{
    use Validates;

    public function getDocumentations()
    {

        $documentations =  Documentation::all();

        if ( ! $this->existData($documentations)) {
            $documentations = [];

        }

        return $documentations;
    }
}
