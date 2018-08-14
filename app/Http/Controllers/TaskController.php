<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use \App\Task;

class TaskController extends Controller
{
	public function index(Request $request) {
		$tasks = Task::orderBy('created_at', 'desc')->get();

		return view('tasks.index', compact('tasks'));
	}

	public function store(Request $request) {
		$validator = Validator::make($request->all(), [
			'name'	=>	'required|max:255'
		]);

		if ($validator->fails()) {
			return redirect('/')
				->withInput()
				->withErrors($validator);
		}

		Task::create([
			'name'	=>	$request->name
		]);

		return redirect('/');
	}

	public function delete(Task $task) {
		$task->delete();

		return redirect('/');
	}
}
