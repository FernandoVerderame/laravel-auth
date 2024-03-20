@extends('layouts.app')

@section('title', 'Create Project')

@section('content')

<header class="pb-4 mb-4 mt-3 border-bottom">
    <h1>Create new Project</h1>
</header>

@include('includes.projects.form')

@endsection

@section('scripts')
<script>
    const placeholder = 'https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=';
    const input = document.getElementById('image');
    const preview = document.getElementById('preview');

    input.addEventListener('input', () => {
        preview.src = input.value || placeholder; 
    })
</script>
@endsection