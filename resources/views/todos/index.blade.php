@extends('layouts.master')

@section('content')
<h1>Todo App</h1>
<a href="{{ route('todos.create') }}" class="btn btn-primary">Create Task</a>
<table class="table mt-3">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Task Completion Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($todos as $todo)
        <tr>
            <td>{{ $todo->title }}</td>
            <td>{{ $todo->description }}</td>
            <td>{{ ucfirst(str_replace('_', ' ', $todo->status)) }}</td>
            <td>{{ $todo->task_completion_date }}</td>
            <td>
                <a href="{{ route('todos.show', $todo) }}" class="btn btn-info">View</a>
                <a href="{{ route('todos.edit', $todo) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection