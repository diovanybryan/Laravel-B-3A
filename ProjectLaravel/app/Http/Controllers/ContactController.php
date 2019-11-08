<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

class ContactController extends Controller
{
    public function Tampil() {
    	$myUsers = Contact::all();

    	return view('users.show', [
    		'myusers' => $myUsers
    	]);
    }

    public function Simpan(Request $request) {

    	$myUser = new Contact();

    	$myUser->first_name = $request->first_name;
    	$myUser->last_name = $request->last_name;
    	$myUser->email = $request->email;
    	$myUser->phone = $request->phone;
    	$myUser->message = $request->message;

    	$myUser->save();

    	return redirect()->Route('show');
    }

    public function Hapus($id) {
    	$model = Contact::find($id);
    	$model->delete();

        return redirect()->Route('show');
    }
}
