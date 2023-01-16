<?php

namespace Centosquared\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Centosquared\Contact\Mail\ContactMailable;
use Centosquared\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
