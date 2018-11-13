
@extends('layout')
@section('content')

    <h1>Create a new project</h1>


    <form action="/projects" method="POST">

        {{csrf_field()}}

        <div>
            <input type="text" name="title" class="input {{$errors->has('title')? 'is-danger':''}}"  value="{{old('title')}}">

        </div>

        <div><textarea class="input {{$errors->has('description')? 'is-danger':''}}" name="description" id="description" cols="30" rows="10" placeholder="Project Description" >  {{old('description')}}</textarea></div>


        <div>
            <button type="submit">Create a Project</button>
        </div>

        @if($errors->any())

            <div class="notification is-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif


    </form>
@endsection