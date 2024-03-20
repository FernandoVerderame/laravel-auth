@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')

<header class="pb-4 mb-4 mt-3 border-bottom">
    <h1>Edit Project</h1>
</header>

<form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">

        <div class="col-6">
            <div class="mb-4">
                <label for="title" class="form-label h3">Title</label>
                <div class="input-group">
                    <input type="text" name="title" id="title" class="form-control" placeholder="Ex.: Laravel DC Comics" value="{{ old('title', $project->title) }}">
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="mb-4">
                <label for="description" class="form-label h3">Description</label>
                <div class="input-group">
                    <textarea type="text" name="description" id="description" class="form-control" placeholder="Project description..." rows="10">{{ old('description', $project->description) }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="pb-4 border-bottom">
                <label for="image" class="form-label h3">URL Image</label>
                <div class="input-group">
                    <input type="url" name="image" id="image" class="form-control" placeholder="Ex.: https:://..." value="{{ old('image', $project->image) }}">
                </div>
            </div>
        </div>

    </div>

    <footer class="d-flex justify-content-between align-items-center mt-4">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary"><i class="fa-solid fa-arrow-rotate-left me-2"></i>Back to projects</a>
    
        <div>
            <button type="reset" class="btn btn-primary me-2"><i class="fa-solid fa-eraser me-2"></i>Reset</button>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk me-2"></i>Save</button>
        </div>
    </footer>

</form>

@endsection
