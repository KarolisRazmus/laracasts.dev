<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
</head>
<body>

<ul>

    @foreach($tasks as $task)

        <li><a href="tasks/{{$task->id}}">{{$task->body}}</a></li>

    @endforeach

</ul>

</body>
</html>
