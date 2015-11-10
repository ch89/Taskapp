<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\TaskRequest;
use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
	public function index() {
		$tasks = Task::all();

		return view('tasks.index')->with('tasks', $tasks);
	}


	public function show(Task $task) {
		return view('tasks.show')->with('task', $task);
	}


	public function create() {
		return view('tasks.create');
	}


	public function store(TaskRequest $request) {
		Task::create($request->all());

		return redirect()->route('tasks.index');
	}


	public function edit(Task $task) {
		return view('tasks.edit')->with('task', $task);
	}


	public function update(TaskRequest $request, Task $task) {
		$task->update($request->all());

		return redirect()->route('tasks.index');
	}
}
