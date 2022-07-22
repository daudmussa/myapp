<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail(){
        return view('emails.TestMail');
    }

    public function sendMail(Request $request){
$details=[
'jinakwanza'=>$request->jinakwanza,
'jinaukoo'=>$request->jinaukoo,
'email'=>$request->email,
'namba'=>$request->namba,
'mtaa'=>$request->mtaa,
'mkoa'=>$request->mkoa,
'nchi'=>$request->nchi,
'posta'=>$request->posta,

];

    
    Mail::to("duadarts@gmail.com")->send(new TestMail($details));
    return back()->with('message_sent','Asante kwa kujisajili');
    //
}

}
