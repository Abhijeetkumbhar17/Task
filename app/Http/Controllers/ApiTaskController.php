<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ApiTaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();
        return response()->json([
            'status' => true,
            'message' => 'Tasks retrieved successfully',
            'data' => $tasks
        ], 200);
    }

    public function edit($id)
    {
        $tasks = Task::findOrFail($id);
        return response()->json([
            'status' => true,
            'message' => 'Task found successfully',
            'data' => $tasks
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'due_date'=>'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $task = Task::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Task Added successfully',
            'data' => $task
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'due_date'=>'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $task = Task::findOrFail($id);
        $task->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Task updated successfully',
            'data' => $task
        ], 200);
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        
        return response()->json([
            'status' => true,
            'message' => 'Task deleted successfully',

        ], 200);
    }
}