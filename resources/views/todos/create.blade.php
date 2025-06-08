@extends('layouts.master')

@section('content')
<h1>Create Task</h1>
<form action="{{ route('todos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    {{-- <div class="mb-3">
        <label class="form-label">Task Completion Date</label>
        <input type="date" name="task_completion_date" class="form-control">
    </div> --}}
    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-control" required>
            <option value="todo">To Do</option>
            <option value="in_progress">In Progress</option>
            <option value="done">Done</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection