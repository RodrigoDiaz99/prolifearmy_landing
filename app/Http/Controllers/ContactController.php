<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function contact()
    {
        return view('welcome');
    }
    public function sendEmail(Request $request)
    {
        $details =[
    'name' =>$request->name,
    'subject' =>$request->subject,
    'email' =>$request->email,
    'msg'=>$request->msg,
        ];
        try {
            Mail::to('contacto@mymexicanshop.com')->send(new ContactMail($details));
            return back()->with('Mensaje Enviado', 'Tu mensaje se envio con exito!');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
       
       
    }
}
