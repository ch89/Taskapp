<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

	public function index() {
		return view('users.index')->with('users', User::all());
	}
}
