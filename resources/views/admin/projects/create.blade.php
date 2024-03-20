@extends('layouts.app')

@section('title', 'Create Project')

@section('content')

<header class="pb-4 mb-4 mt-3 border-bottom">
    <h1>Create new Project</h1>
</header>

<form action="">

    <div class="row">

        <div class="col-6">
            <div class="mb-3">
                <label for="title" class="form-label h3">Title</label>
                <div class="input-group">
                    <input type="text" name="title" id="title" class="form-control" placeholder="Project name...">
                </div>
            </div>
        </div>

    </div>

</form>

@endsection
