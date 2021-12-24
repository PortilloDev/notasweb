<?php

namespace App\Helpers;

use App\Models\Log;
use Exception;
use Illuminate\Support\Facades\Log as FacadesLog;

class LogHelper
{
    public static function register_view($model)
    {
        try{
            if ($model) {
                $data = ([
                    'post_id' => $model->id,
                    'url_current' => url()->current(),
                    'url_previous' => url()->previous(),
                ]);
                Log::create($data);
            }

        }catch(Exception $error){
            
            FacadesLog::error("No se ha registrado la visita a la página - ". $error->getMessage());
        }
        
    }
}
