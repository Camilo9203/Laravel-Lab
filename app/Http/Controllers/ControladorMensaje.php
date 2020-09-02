<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorMensaje extends Controller
{
    
    public function store(Request $request)
    {
        //return $request -> get('name');
        //return Request('name');

        request()->validate ([
            
            'name' => 'required',

            'email' => 'required|email',

            'subject' => 'required',

            'content' => 'required|min:3'
        ]);

        return 'Datos Validados';
    }

}
