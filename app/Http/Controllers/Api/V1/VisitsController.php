<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Log as LogModel;
use Exception;

class VisitsController extends Controller
{
    private const WEB_REACT = "https://rafaelportillo.es";

    public function __invoke(Request $request)
    {
        $response = $this->validate_request($request);
        return  response()->json([
            'message' => $response['messages']
        ], $response['code']);

    }


    private function validate_request($request)
    {
        $validate =  $request->validate([
            'referrer'     => 'required',
        ]);

        $response = [
            'code' => null,
            'messages'=> null
        ];
        if ($validate) {
            if( $this->sent($request) ) {
                $response['code'] =200;
                $response['messages'] ='Success';

            } else {
                $response['code'] =409;
                $response['messages'] ='Your request could not be processed';
            }

        } else {
            $response['code'] =400;
            $response['messages'] ='Incorrect request, some parameter is missing, or the one received is not the expected one';

        }
        Log::error($response['messages'] .' code=> ' . $response['code']);
        return $response;
    }


    private function sent(Request $request)
    {
        $data = [
            'referrer' => $request->get('referrer'),
        ];
        $model = new Visit();

        try {
            $token = new \Faker\Core\Uuid();

            $data = ([
                'post_id' => 0,
                'url_current' => url()->current(),
                'url_previous' => url()->previous(),
                '_token'=> $token->uuid3(),
                'info'=> $model->id . ' => '. $data['referrer'],
                'model'=> get_class($model),
                'pages'=> $data['referrer'],
            ]);

            LogModel::create($data);

        } catch (Exception $error) {
            Log::error("ERROR: Registro visita portfoio React -" . $error->getMessage());
            return false;
        }

        return true;
    }

}
