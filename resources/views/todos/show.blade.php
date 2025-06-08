@extends('layouts.master')

@section('content')
<h2>Task Details</h2>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ $todo->title }}</h4>
        <p class="card-text"><strong>Description:</strong> {{ $todo->description }}</p>
        <p class="card-text"><strong>Status:</strong> {{ ucfirst(str_replace('_', ' ', $todo->status)) }}</p>
        <p class="card-text"><strong>Task Completion Date:</strong> {{ $todo->task_completion_date ?? 'Not Set' }}</p>
        <a href="{{ route('todos.index') }}" class="btn btn-primary">Back</a>
        <a href="{{ route('todos.edit', $todo) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
</div>
@endsection