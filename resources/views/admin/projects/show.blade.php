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

<footer class="d-flex justify-content-between align-items-center">
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mt-4">Back to projects</a>
</footer>

@endsection