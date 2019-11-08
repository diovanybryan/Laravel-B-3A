<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Myuser;

class MyuserController extends Controller
{
    public function Tampil() {
    	$myUsers = Myuser::all();

    	return view('users.show', [
    		'myusers' => $myUsers
    	]);
    }

    public function Simpan(Request $request) {

    	$myUser = new Myuser();

    	$myUser->name = $request->name;
    	$myUser->email = $request->email;
    	$myUser->password = md5($request->password);
    	$myUser->birthdate = $request->birthdate;

    	$myUser->save();

    	return redirect()->Route('show');
    }

    public function Hapus($id) {
    	// echo "masuk hapus ".$id; exit();
    	$model = Myuser::find($id);
    	$model->delete();

        return redirect()->Route('show');
    }
}
