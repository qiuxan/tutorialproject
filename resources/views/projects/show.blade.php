@extends('layout')

@section('content')

    <h1 class="title">{{$project->title}}</h1>

    <div class="container">
        {{$project->description}}
    </div>

    <a href="/projects/{{$project->id}}/edit">Edit</a>


    @if($project->tasks->count())
        <div class="box">
            @foreach($project->tasks as $task)

                <div>
                    <form action="/tasks/{{$task->id}}" method="POST">

                        <label for="completed" class="checkbox {{$task->completed? 'is-complete':''}}">
                            <input type="checkbox" name="completed" id="completed" onchange="this.form.submit()" {{$task->completed? 'checked':''}}>
                            {{$task->description}}
                            @method('PATCH')
                            {{csrf_field()}}
                        </label>

                    </form>
                </div>



            @endforeach
        </div>
    @endif

    {{--add a new task form--}}

    <form action="/projects/{{$project->id}}/tasks" method="POST" class="box">

        <div class="field"><label for="description"class="label">New Task</label>
            <div class="control">
                <input type="text" class="input" placeholder="New Task" name="description" required>
            </div>
        </div>

        @include('errors')

        {{csrf_field()}}


        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Add a Task</button>
            </div>
        </div>
    </form>
@endsection