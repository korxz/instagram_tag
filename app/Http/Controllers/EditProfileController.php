<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    public function index() {
    	return view('edituser');
    }

    public function edit($id) {
    	$user = User::find($id);

    	return view('edituser')->with('user', $user);
    }
}
