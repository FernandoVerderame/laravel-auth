@extends('layouts.app')

@section('title', 'Project')

@section('content')

<header>
    <h1 class="pb-4 mb-4 border-bottom">{{ $project->title }}</h1>
</header>

<div class="clearfix pb-4 border-bottom">
    @if($project->image)
        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="me-2 float-start">
    @endif
    <p>{{ $project->description }}</p>
    <div>
        <strong>Created at:</strong> {{ $project->created_at }}
        <strong>Updated at:</strong> {{ $project->updated_at }}
    </div>
</div>

<footer class="d-flex justify-content-between align-items-center mt-3">
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary"><i class="fa-solid fa-arrow-rotate-left me-2"></i>Back to projects</a>

    <div class="d-flex justify-content-between gap-2">
        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning"><i class="fa-solid fa-pencil me-2"></i>Edit</a>

        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
            @csrf
            @method('DELETE')
        <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can me-2"></i>Delete</button>
        </form>
    </div>
</footer>

@endsection