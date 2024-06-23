<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h3>イベント名</h3>
        <p class="name">
            {{ $event->name}}
        </p>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $event->overview }}</p>    
            </div>
            <a href="/categories/{{ $event->category->id }}">{{ $event->category->name }}</a>
            <!-- ここから追加 -->
            <h3>イベント写真</h3>
            @if($event->image_url)
            <div>
                <img src="{{ $event->image_url }}" alt="画像が読み込めません。" style="max-width: 800px; max-height: 800px;"/>
            </div>
            @endif
            <!-- ここまで追加 -->
        </div>
        <div class="edit">
            <a href="/events/{{ $event->id }}/edit">編集する</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>