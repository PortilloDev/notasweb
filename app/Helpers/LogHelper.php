<?php

namespace App\Helpers;

use App\Models\Log;
use Exception;
use Illuminate\Support\Facades\Log as FacadesLog;

class LogHelper
{
    public static function register_view($model, $token, $info = null)
    {
        $checking_token = self::checking_token($token);
        

        if (! $checking_token) {
          $pages = [
            'page' => url()->current(),
          ];
          
            $data = ([
                'post_id' => $model->id,
                'url_current' => url()->current(),
                'url_previous' => url()->previous(),
                '_token'=> $token,
                'info'=> $info,
                'model'=> get_class($model),
                'pages'=> json_encode($pages),
            ]);

            self::register_session($data);
        } else {
            self::update_session($checking_token, $model);
        }
        
    }

    public static function checking_token($token)
    {
        $log = Log::where('_token', $token)->first();

        if ($log != null) {
            return $log;
        }
        return false;

    }

    public static function register_session($data)
    {
        try{
            Log::create($data);
        }catch(Exception $error){
                    
            FacadesLog::error("No se ha registrado la visita a la página - ". $error->getMessage());
        }
        return true;
    }

    public static function update_session($log, $model)
    {
       
        
        try{

            $pages = json_decode($log->pages,true);
            $pages = array_merge($pages, ['pages_'. $model->id => url()->current()]);
            $log->pages = json_encode( $pages);
            $log->save();
        }catch(Exception $error){
                    
            FacadesLog::error("No se ha actualizado la visita a la página - ". $error->getMessage());
        }
        return true;
    }
}
