@extends('layouts.app')
@section('title', 'Projects')

@section('content')
<h1>Projects</h1>

@foreach ($projects as $project)
    <div class="project">
        <h2>{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>
    </div>
@endforeach
@endsection