<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Event</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>イベント一覧</h1>
        <a href="/events/create">イベントを作成する</a>
        <div class='events'>
            @foreach ($events as $event)
                <div class='post'>
                    <h2 class='name'>
                        <a href="/events/{{ $event->id }}">{{ $event->name }}</a>
                    </h2>
                    <a href="">{{ $event->category->name }}</a>
                    <p class='overview'>{{ $event->overview }}</p>
                    <!-- 以下を追記 -->
                    <form action="/events/{{ $event->id }}" id="form_{{ $event->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteEvent({{ $event->id }})">削除</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $events->links()}}
        <div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
            function deleteEvent(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>