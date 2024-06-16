<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Event</title>
    </head>
    <body>
        <h1>Event Name</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="name">
                <h2>イベント名</h2>
                <input type="text" name="event[name]" placeholder="イベント名" value="{{ old('event.name') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('event.name') }}</p>
            </div>
            <div class="overview">
                <h2>内容</h2>
                <textarea name="event[overview]" placeholder="イベントの内容を書いてください">{{ old('event.overview') }}</textarea>
                <p class="overview__error" style="color:red">{{ $errors->first('event.overview') }}</p>
            </div>
            <input type="submit" value="実行"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
