<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	$task = Task::all();

		return view('alltasks', compact('task'));

    }

    public function specificTask(Task $task) //Task::find(wildcard)
    {
    	return view('tasks', compact('task'));
    }

    //  public function specificTask($id)
    // {
    // 	$task = Task::find($id);

    // 	return view('tasks', compact('task'));
    // }
}


