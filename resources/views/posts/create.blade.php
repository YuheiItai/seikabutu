<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>大分温泉ランキング</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>１位</h2>
                
                <h2>２位</h2>
                
                <h2>３位</h2>
                
                <h2>４位</h2>
                
                <h2>５位</h2>
                
                <h2>６位</h2>
                
                <h2>７位</h2>
                
                <h2>８位</h2>
                
                <h2>９位</h2>
                
                <h2>１０位</h2>
                
            </div>
            
        </form>
        <div class="ホームページへ戻る">[<a href="/index">戻る</a>]</div>
    </body>
</html>