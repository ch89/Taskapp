<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
	public function index() {
		$tasks = Task::all();

		return view('tasks.index')->with('tasks', $tasks);
	}


	public function show($id) {
		
	}
}
