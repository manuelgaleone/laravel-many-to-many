@extends('layouts.admin')

@section('create')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 py-4">Create a Project</h1>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('admin.projects.store')}}" method="post" class="card p-3" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" placeholder="Il mio primo progetto" aria-describedby="helpId" required>
    </div>
    <div class="mb-3">
        <input type="file" class="form-control" name="image" id="image" placeholder="Aggiungi un'immagine" aria-describedby="coverImgHelper">
    </div>
    <div class="mb-3">
        <select class="form-select" name="category_id" id="category_id" aria-label="Default select example">
            <option disabled selected>Scegli una Categoria</option>
            @foreach ($categories as $category) {
            <option value="{{$category->id}}">{{$category->name}}</option>
            }
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <select multiple class="form-select" name="technologies[]" id="technologies">
                <option selected disabled>Seleziona una Tecnologia</option>
                @forelse ($technologies as $technology)
                <option value="{{$technology->id}}">{{$technology->name}}</option>
                @empty
                <option selected disabled>Nessuna Tecnologia presente</option>
                @endforelse
            </select>
        </div>
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="content" id="content" placeholder="Oggi sono andato al mare..." rows="3" required>{{old('content')}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Invia!</button>
</form>
@endsection