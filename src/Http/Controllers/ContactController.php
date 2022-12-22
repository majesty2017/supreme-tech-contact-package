<?php

namespace Reborn\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Reborn\Contact\Mail\ContactMailable;
use Reborn\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::index');
    }

    public function store(Request $request)
    {
        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all()) ;
        return back();
    }
}
