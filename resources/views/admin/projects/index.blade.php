@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<header class="d-flex align-items-center justify-content-between pb-4 mb-4 mt-3 border-bottom">
    <h1>Projects</h1>

    <form action="{{ route('admin.projects.index') }}" method="GET">
        <div class="input-group">
            <select class="form-select" name="filter">
                <option value="">All</option>
                <option value="completed" @if($filter === 'completed') selected @endif>Completed</option>
                <option value="drafts" @if($filter === 'drafts') selected @endif>Work in progress</option>
            </select>
            <button class="btn btn-outline-secondary" type="submit"><i class="fa-solid fa-filter me-2"></i>Status</button>
        </div>
    </form>
</header>

<table class="table table-hover border mb-4">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Status</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th>
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.projects.trash') }}" class="btn btn-sm btn-secondary"><i class="fa-solid fa-trash me-2"></i>Show trash</a>

                    <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-success"><i class="fa-solid fa-plus me-2"></i>New Project</a>
                </div>
            </th>
        </tr>
    </thead>
    <tbody>

        @forelse($projects as $project)
        <tr>
            <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->title }}</td>
            <td>{{ $project->slug }}</td>
            <td>{{ $project->is_completed ? 'Completed' : 'Work in progress' }}</td>

            {{-- TODO date formatted --}}
            <td>{{ $project->created_at }}</td>
            <td>{{ $project->updated_at }}</td>
            <td>
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pencil"></i></a>

                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                    </form>
                </div>
            </td>
        </tr>

        @empty 
            <tr>
                <td colspan="7">
                    <h3>There aren't any projects.</h3>
                </td>
            </tr>
        @endforelse

    </tbody>
</table>

@if($projects->hasPages())
    {{ $projects->links() }}
@endif

@endsection

@section('scripts')
  @vite('resources/js/delete_confirmation.js')
@endsection