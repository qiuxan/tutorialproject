
@extends('layout')
@section('content')

    <h1>Create a new project</h1>


    <form action="/projects" method="POST">

        {{csrf_field()}}

        <div>
            <input required type="text" name="title" class="input {{$errors->has('title')? 'is-danger':''}}"  value="{{old('title')}}">

        </div>

        <div><textarea requiredclass="input {{$errors->has('description')? 'is-danger':''}}" name="description" id="description" cols="30" rows="10" placeholder="Project Description" >  {{old('description')}}</textarea></div>


        <div>
            <button type="submit">Create a Project</button>
        </div>

        @include('errors')


    </form>
@endsection