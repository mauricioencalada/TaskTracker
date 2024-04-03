<?php

namespace App\Http\Controllers;

use App\Mail\ContactosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactosController extends Controller
{
    public function index(){
    return view('contactanos.index');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|min:3',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);
        
        Mail::to('encalamauricio@gmail.com')->
        send(new ContactosMailable($request->all()));

        return redirect()->route('contactanos.index')->with('info','Mensaje enviado');
    }
}
