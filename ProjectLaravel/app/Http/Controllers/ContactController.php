<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

class ContactController extends Controller
{
    public function Tampil() {
    	$contacts = Contact::all();

    	return view('contacts.show', [
    		'myusers' => $contacts
    	]);
    }

    public function Simpan(Request $request) {

    	$contact = new Contact();

    	$contact->first_name = $request->first_name;
    	$contact->last_name = $request->last_name;
    	$contact->email = $request->email;
    	$contact->phone = $request->phone;
    	$contact->message = $request->message;

    	$contact->save();

    	return redirect()->Route('showcontact');
    }

    public function Hapus($id) {
    	$model = Contact::find($id);
    	$model->delete();

        return redirect()->Route('showcontact');
    }
}
