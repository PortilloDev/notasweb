<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ContactResource;
use App\Mail\SendMailReactContact;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Exception;
class ContactController extends Controller
{

    public function contact(Request $request)
    {
       $response = $this->validate_request($request);
       return  response()->json([
                'message' => $response['messages']
            ], $response['code']);
        
    }


    private function validate_request($request)
    {   
        $validate =  $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'subject'  => 'required|string',
            'comments' => 'required|string'
        ]);
        $response = [
            'code' => null,
            'messages'=> null
        ];
        if ($validate) {
            if( $this->sent($request) ) {
                $response = [
                    'code' => 200,
                    'messages'=> 'Success'
                ];

            } else {
                $response = [
                    'code' => 409,
                    'messages'=> 'Your request could not be processed'
                ];
            }

        } else {

            $response = [
                'code' => 400,
                'messages'=> 'Incorrect request, some parameter is missing, or the one received is not the expected one'
            ];
        }

        return $response;
    }
    
    
    private function sent(Request $request)
    {
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'comments' => $request->get('comments'),
        ];

        try {
            Mail::to( env('MAIL_CONTACT_RAFA'))->bcc(env('MAIL_CONTACT_BCC'))->send(new SendMailReactContact($data));
        } catch (Exception $error) {
            Log::error("ERROR: Registro formulario contacto -" . $error->getMessage());
            return false;
        }
        return true;
    }  

}
