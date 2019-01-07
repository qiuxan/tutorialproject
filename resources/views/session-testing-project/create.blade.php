<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Project</title>
</head>
<body>

    <form action="/" method="">

        {{csrf_field()}}
        <div><input type="text"  name="title"></div>
        <div><textarea name="description" id="" cols="30" rows="10"></textarea></div>
        <div><button type="submit">submit</button></div>

    </form>

</body>
</html>