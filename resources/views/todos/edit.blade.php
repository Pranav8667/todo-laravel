@extends('layouts.master')

@section('content')
<h1>Edit Task</h1>
<form action="{{ route('todos.update', $todo) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $todo->title }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control">{{ $todo->description }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-control" required>
            <option value="todo" {{ $todo->status == 'todo' ? 'selected' : '' }}>To Do</option>
            <option value="in_progress" {{ $todo->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
            <option value="done" {{ $todo->status == 'done' ? 'selected' : '' }}>Done</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Task Completion Date</label>
        <input type="date" name="task_completion_date" class="form-control" value="{{ $todo->task_completion_date }}">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('todos.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection