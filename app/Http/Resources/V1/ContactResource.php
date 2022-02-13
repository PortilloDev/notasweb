<?php

namespace App\Http\Resources\V1;

use App\Mail\SendMailReactContact;
use Exception;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
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

        return response()->json([
            'data'=> $response['messages']
        ], $response['code']
        , ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }
    
    
    public function sent(Request $request)
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
