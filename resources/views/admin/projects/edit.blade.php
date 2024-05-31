@extends('layouts.admin')

@section('content')
    <h3>Modifica il Progetto</h3>
    <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Titolo del progetto</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                value="{{ old('name') }}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="client_name" class="form-label">Nome del Cliente</label>
            <input type="text" class="form-control" id="client_name" name="client_name"
                aria-describedby="emailHelp value="{{ old('client_name') }}"">
        </div>
        @error('client_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-floating">
            <textarea class="form-control" id="summary" name="summary" style="height: 100px" value="{{ old('summary') }}"></textarea>
            <label for="summary">Descrizione del Progetto</label>
        </div>
        @error('summary')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary my-3">Salva</button>
    </form>
@endsection