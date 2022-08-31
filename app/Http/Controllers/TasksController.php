<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('tasks', [
            'tasks' => Tasks::all()
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:tasks|max:255',
            'text' => 'required',
        ]);

        $tasks = new Tasks;
 
        $tasks->name = $request->name;
        $tasks->text = $request->text;
        $tasks->priority = $request->priority;
 
        $tasks->save();

        return redirect()->route('tasks')->with('success', "Вы добавили задачу $tasks->name");

        // return $request->all();
    }
    public function delete($taskId) {
        $tasks = new Tasks;
        $taskName = $tasks->find($taskId)->name;
        $tasks->find($taskId)->delete();
        return redirect()->route('tasks')->with('success', "Задача $taskName была удалёна");
    }
}
