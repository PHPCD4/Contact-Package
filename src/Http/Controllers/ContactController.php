<?php

namespace Sorwar\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Sorwar\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Sorwar\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
    	return view('contact::contact');
    }

    public function send(Request $request)
    {
    	\Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->name,$request->message));
    	Contact::create($request->all());

        session()->flash('Message','Your Message Send Successfully');
    	return redirect('contact');
    }
}
