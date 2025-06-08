<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' =>'required|unique:todos,title',
        //     'status' =>'required|in:todo,in_progress,done',
        // ]);
        Todo::create($request->all());
        return redirect()->route('todos.index')->with('success', 'Task created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit',compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        // $request->validate([
        //     'title' => 'required|unique:todos,title'. $todo->id,
        //     'status' => 'required|in:todo,in_progress,done',
        // ]);
        $todo->update($request->all());
        return redirect()->route('todos.index')->with('success', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'Task deleted successfully');
    }
    public function completedTasks(){
        $todos = Todo::where('status', 'done')->get();
        return view('todos.index', compact('todos'));
    }
    public function todoTasks(){
        $todos = Todo::where('status', 'todo')->get();
        return view('todos.index', compact('todos'));
    }
}
