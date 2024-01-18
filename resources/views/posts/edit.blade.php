<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        <h1>オススメの大分温泉</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>温泉</h2>
                <input type="text" name="post[title]" placeholder="⚪︎⚪︎温泉" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>オススメポイント</h2>
                <textarea name="post[body]" placeholder="広い"></textarea>
            </div>
            <div class="body">
                <h2>こんな人にオススメ</h2>
                <textarea name="post[body]" placeholder="ゆっくりしたい人">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="投稿"/>
        </form>
        <div class="ホームページへ戻る">[<a href="/">戻る</a>]</div>
    </body>
</html>