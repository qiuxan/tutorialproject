@extends('layout')

@section('content')
    <h1 class="title">Edit project</h1>

    <form action="/projects/{{$project->id}}" method="POST">

        {{csrf_field()}}
        {{method_field('PATCH')}}

        <div class="field">

            <label for="title" class="label">title</label>
            <div class="control">
                <input type="text" name="title" placeholder="Title" value="{{$project->title}}">
            </div>
        </div>

        <div class="field">

            <label for="description" class="label">description</label>
            <div class="control">
                <textarea type="text" name="description" placeholder="Description">{{$project->description}}</textarea>
            </div>
        </div>

        <div class="field">

            <div class="control">
                <button type="submit" class="button is-link">Update project</button>

                
            </div>


        </div>



    </form>


    <form action="/projects/{{$project->id}}" method="POST">

        {{csrf_field()}}
        {{method_field('DELETE')}}

        <div class="field">

            <div class="control">
                <button type="submit" class="button">Delete project</button>

            </div>


        </div>


    </form>
@endsection