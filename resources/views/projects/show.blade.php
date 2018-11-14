@extends('layout')

@section('content')

    <h1 class="title">{{$project->title}}</h1>

    <div class="container">
        {{$project->description}}
    </div>

    <a href="/projects/{{$project->id}}/edit">Edit</a>


    @if($project->tasks->count())
        <div>
            @foreach($project->tasks as $task)
                <li>{{$task->description}}</li>
            @endforeach
        </div>
    @endif

@endsection