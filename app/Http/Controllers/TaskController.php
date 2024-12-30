<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=Task::all();
        return view('tasks.index', compact('tasks'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'due_date'=>['required'],
        ]);
        //
        $task =new Task([
            "title" =>$request->title,
            "description" =>$request->description,
            "due_date" =>$request->due_date,
        ]);
       $task->save();
       return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $task=Task::findOrFail($id);
        return view('tasks.edit',compact('task'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $post=Task::findOrFail($id);
        $post->update([
            "title" =>$request->title,
            "description" =>$request->description,
            "due_date" =>$request->due_date,
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task=Task::find($id)->delete();
        return redirect('/');

        //
    }
}
