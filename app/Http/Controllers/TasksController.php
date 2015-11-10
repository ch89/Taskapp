<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
	public function index() {
		$games = [];

		return view('tasks.index')->with('games', $games);
	}
}
