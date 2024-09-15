@extends('layouts.app')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>Due Date: {{ $task->due_date->format('Y-m-d') }}</p>

    <h4>Status</h4>
    <!-- Include Livewire component here for real-time status update -->
    <livewire:task-status-update :task="$task" />

    <a href="{{ route('tasks.edit', $task->id) }}">Edit Task</a>
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Task</button>
    </form>
@endsection
