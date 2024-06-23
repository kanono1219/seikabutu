<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Event</title>
    </head>
    <body>
        <h1>イベント編集画面</h1>
        <div class="content">
        <form action="/events/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="content_name">
                <h2>イベント名</h2>
                <input type="text" name="event[name]" placeholder="イベント名" value="{{ $event->name }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('event.name') }}</p>
            </div>
            <div class="content_verview">
                <h2>内容</h2>
                <input type'text' name="event[overview]" placeholder="イベントの内容を書いてください" value="{{ $event->overview}}">
                <p class="overview__error" style="color:red">{{ $errors->first('event.overview') }}</p>
            </div>
            <!-- ここから画像挿入するため追加 -->
            <div class="image">
                <h2>イベント画像</h2>
                @if($event->image_url)
                    <img src="{{ $event->image_url }}" alt="イベント画像" style="max-width: 300px; max-height: 300px;">
                @endif
                <input type="file" name="image">
            </div>
            <!-- ここまで追加 -->
            <input type="submit" value="実行"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
