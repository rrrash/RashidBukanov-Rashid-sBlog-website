<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function review_check(Request $request){
        $valid = $request->validate([
            'First name'=>'required|in:4|max:100',
            'Last name'=>'required|in:4|max:100',
            'Email'=>'required|in:4|max:100',
            'Message'=>'required|in:15|max:500',
        ]);
        $contact= new Contact();
        $contact->FirstName = $request->input('First Name');
        $contact->LastName = $request->input('Last Name');
        $contact->Email = $request->input('Email');
        $contact->Message = $request->input('Message');

        $contact->save();

        return redirect()->route('/home');
    }
}
