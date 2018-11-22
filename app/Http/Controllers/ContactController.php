<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormMail;
use App\Mail\ContactFormConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function contact(ContactRequest $request)
    {
        $contactMail = new ContactFormMail($request->all());

        Mail::to('hello@briqchain.com')->send(new ContactFormMail($request->all()));
        Mail::to($request->get('email'))->send(new ContactFormConfirmation($request->all()));

        Session::flash('message', 'Bericht is verzonden.');

        return redirect('contact');
    }
}
