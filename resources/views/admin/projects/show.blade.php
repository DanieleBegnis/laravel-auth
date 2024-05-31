@extends('layouts.admin')

@section('content')
    <h3>{{ $project->name }}</h3>
    <p>{{ $project->summary }}</p>
    <p>Progetto per: {{ $project->client_name }}</p>
    <p>Creato il: {{ $project->created_at }}</p>
    <p>Aggiornato il: {{ $project->updated_at }}</p>
    <h4>Modifica il post</h4>
    <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">Edit</a>
@endsection