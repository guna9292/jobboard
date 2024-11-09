<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use App\Mail\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function send(){
        // Mail::raw('Hello Everyone',function(Message $message){
        // $message->to('nagothigunesh.21.it@anits.edu.in')
        // ->subject('This is a test mail')
        // ->from('nagothigunesh.21.it@anits.edu.in');
        // });
        // $toEmail='kuppilisravani.21.it@anits.edu.in';
        // $fromEmail='guneshcruzz9292@gmail.com';
        // $subject='Hello Everyone';
        // // $htmlContent='This is a test mail';
        // $htmlContent = '<h3>Hello Everyone</h3> <p>This is a test mail sent from Laravel application.</p>';

        // Mail::html($htmlContent,function(Message $message) use($toEmail,$fromEmail,$subject){
        // $message->to($toEmail)
        // ->subject($subject)
        // ->from($fromEmail);
        // });

        // return 'Html Email sent successfully';
        Mail::to('guneshcruzz9292@gmail.com')->send(new ContactUs());
        return 'Email has been sent';
    }
    public function show(){
        return view('pages.contact');
    }
    public function sendEnquiry(Request $request){
        $data = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required | min:7 | email',
            'subject' => 'required ',
            'messageContent' => 'required',
        ]);
        // dd('OK');
        // Mail::to(env('MAIL_TO_ADDRESS'))->send(new Enquiry($data));
        Mail::to('mohammadnihaal6777@gmail.com')->send(new Enquiry($data));
        return redirect()->back()->with('success','Your enquiry was successfully sent');
        // Mail::to(config('mail.to_address'))->send(new Enquiry($data));
    }
}
