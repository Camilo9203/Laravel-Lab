<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    
    public function store(Request $request)
    {
        //return $request -> get('name');
        //return Request('name');
        
        //Validar datos
        $msg = request()->validate ([
            
            'name' => 'required',

            'email' => 'required|email',

            'subject' => 'required',

            'content' => 'required|min:3'
        ], [
            'name.required' => __('I need yout name')
        ]);
        
        Mail::to('camilorios.h92@gmail.com')->queue(new MessageReceived($msg));

        // return new MensajeRecibido($msg);

        return 'Mensaje Recibido';
    }

}
