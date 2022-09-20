<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactsPostRequest;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(5);
        return view('contacts.index',compact('contacts'));
    }
    
    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactsPostRequest $request)
    {
        Contact::create([
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
            'message' => $request->input('message')
        ]);
        return redirect()->route('contacts.index')->with(session()->flash('create', 'Contact Added Successfully'));;
    }
    
    public function show(Contact $contact)
    {
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit',compact('contact'));
    }

    public function update(ContactsPostRequest $request, Contact $contact)
    {
        $contact->update([
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
            'message' => $request->input('message')
        ]);
        return redirect()->route('contacts.index')->with(session()->flash('update', 'Contact Updated Successfully'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with(session()->flash('delete', 'Contact Deleted Successfully'));;
    }
}
