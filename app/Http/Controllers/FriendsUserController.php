<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendsUserController extends Controller
{
    public function index() {
    	return view('friendsuser');
    }

    public function showAll() {
    	return view('friendsuser');
    }
}
