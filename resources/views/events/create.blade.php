<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Event</title>
    </head>
    <body>
        <h1>イベント作成</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
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
            <div class="category">
                <h2>イベントカテゴリー</h2>
                <select name="event[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- ここから画像挿入するため追加 -->
                <h2>イベント画像</h2>
            <div class="image">
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
