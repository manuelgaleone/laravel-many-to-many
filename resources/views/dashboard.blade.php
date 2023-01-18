@extends('layouts.admin')

@section('dashboard')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 py-4">Dashboard</h1>
</div>
<div class="button_wrapper">
    <div class="button_elements d-flex justify-content-start">
        <a class="btn btn-primary" href="{{route('admin.projects.index')}}">Visualizza i Progetti</a>
        <a class="btn btn-dark mx-2" href="{{route('admin.projects.create')}}">Crea un Progetto</a>
    </div>
</div>
@endsection