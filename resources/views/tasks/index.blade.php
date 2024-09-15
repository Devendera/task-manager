@extends('layouts.app')

@section('content')
    <h1>Task List</h1>
    <div class="container">
        <h1>Task Dashboard</h1>
        
        <!-- React Task Dashboard will be rendered here -->
        <div id="task-dashboard"></div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <!-- Include Livewire component here for real-time status update -->
                        <livewire:task-status-update :task="$task" />
                    </td>
                    <td>{{ $task->due_date->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
