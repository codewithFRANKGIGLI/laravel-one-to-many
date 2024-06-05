@extends('layouts.admin')
@section('content')
    <h2>Create a new project</h2>
{{-- errors --}}


    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="client_name" class="form-label">Client name</label>
            <input type="text" class="form-control" id="client_name" name="client_name">
        </div>
        {{-- input per il caricamento di un immagine --}}
        <div class="mb-3">
            <label for="cover_img" class="form-label">Image</label>
            <input type="file" class="form-control" id="cover_img" name="cover_img">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <input type="text" class="form-control" id="summary" name="summary">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
