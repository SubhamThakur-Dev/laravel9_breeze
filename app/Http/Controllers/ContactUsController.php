<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactUs;
use App\Models\Contact;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function insert(ContactUs $request)
    {
        $entry = Contact::create([
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
            'message' => $request->input('message')
        ]);
        return redirect()->route('contact')->with(session()->flash('send', 'Message send Successfully'));
    }
}
