<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Event</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>イベント名</h1>
        <a href="/events/create">イベントを作成する</a>
        <div class='events'>
            @foreach ($events as $event)
                <div class='post'>
                    <h2 class='name'>
                        <a href="/events/{{ $event->id }}">{{ $event->name }}</a>
                    </h2>
                    <p class='overview'>{{ $event->overview }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $events->links()}}
        <div>
    </body>
</html>