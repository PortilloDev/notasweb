<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateContact;
use App\Mail\EmailContact;
use App\Mail\SendCopyContactMail;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('web.contact.index');
    }

    public function sent(ValidateContact $request)
    {
        $name  = $request->get('name');
        $email = $request->get('email'); 
        $data = $request->except('_token');

        try {
            Contact::create($data);
        } catch (Exception $error) {
            Log::error("ERROR: Registro formulario contacto -" . $error->getMessage());
            return redirect()->route('contact')->with('warning', __("Lo sentimos mucho $name :(  .Se ha producido un error y no hemos podido registrar tú mensaje. Si persiste el fallo puedes intentar localizarme a través de las redes sociales. "));
        }
        Mail::to( $email)->bcc(env('MAIL_CONTACT_BCC'))->send(new EmailContact($data));
        Mail::to( env('MAIL_FROM_ADDRESS'))->send(new SendCopyContactMail($data));
        return redirect()->route('contact')->with('info', __("Gracias $name !!, el mensaje se ha registrado correctamente y en cuanto pueda me pondré en contacto contigo."));
    }
}
