@if($project->exists)
    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @method('PUT')
@else 
    <form action="{{ route('admin.projects.store') }}" method="POST">
@endif

    @csrf

    <div class="row">

        <div class="col-6">
            <div class="mb-4">
                <label for="title" class="form-label h3">Title</label>
                <div class="input-group">
                    <input type="text" name="title" id="title" class="form-control" placeholder="Ex.: Laravel DC Comics" value="{{ old('title', $project->title) }}" required>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="mb-4">
                <label for="description" class="form-label h3">Description</label>
                <div class="input-group">
                    <textarea type="text" name="description" id="description" class="form-control" placeholder="Project description..." rows="10" required>{{ old('description', $project->description) }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-10">
            <div class="mb-5">
                <label for="image" class="form-label h3">URL Image</label>
                <div class="input-group">
                    <input type="url" name="image" id="image" class="form-control" placeholder="Ex.: https:://..." value="{{ old('image', $project->image) }}">
                </div>
            </div>
        </div>
        <div class="col-1  d-flex align-items-center">
            <div class="">
                <img src="{{ old('image', $project->image ?? 'https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=') }}" class="img-fluid" alt="project image" id="preview">
            </div>
        </div>
        <div class="col-1 d-flex align-items-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="is_completed" name="is_completed" @if(old('is_completed', $project->is_completed)) checked @endif>
                <label class="form-check-label" for="is_completed">Completed</label>
            </div>
        </div>

    </div>

    <footer class="d-flex justify-content-between align-items-center pt-4 border-top">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary"><i class="fa-solid fa-arrow-rotate-left me-2"></i>Back to projects</a>
    
        <div>
            <button type="reset" class="btn btn-primary me-2"><i class="fa-solid fa-eraser me-2"></i>Reset</button>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk me-2"></i>Save</button>
        </div>
    </footer>

</form>