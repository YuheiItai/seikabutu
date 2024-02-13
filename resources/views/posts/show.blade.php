<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <!-- formタグにenctypeを追加 -->
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="name">
                <h2>Name</h2>
                <input type="text" name="post[name]" placeholder="名前"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <!-- ここから追加 -->
            <div class="image">
                <input type="file" name="image">
            </div>
            <!-- ここまで追加 -->
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/index">戻る</a>
        </div>
    </body>
</html>