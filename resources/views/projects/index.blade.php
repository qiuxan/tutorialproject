<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>

    <h1>Projects</h1>

<p>
    <ul>
        @foreach($projects as $project)

            <li>{{$project->title}}</li>

        @endforeach
    </ul>

</p>
</body>

</html>