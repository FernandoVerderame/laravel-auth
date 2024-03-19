@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<header>
    <h1 class="pb-4 mb-4 border-bottom">Projects</h1>
</header>

<table class="table table-hover border">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        @forelse($projects as $project)
        <tr>
            <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->title }}</td>
            <td>{{ $project->slug }}</td>
            <td>{{ $project->created_at }}</td>
            <td>{{ $project->updated_at }}</td>
            <td>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
            </td>
        </tr>

        @empty 
            <tr>
                <td colspan="6">
                    <h3></h3>
                </td>
            </tr>
        @endforelse

    </tbody>
  </table>

@endsection