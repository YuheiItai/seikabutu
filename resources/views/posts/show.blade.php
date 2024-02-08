<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="utf-8">
        <title>Blog</title>
       <!-- Fonts -->
   </head> 
    <body>
     <h1>ログイン画面</h1>
      <form action="/posts" method="POST">
            <input id="signin-id" name="username" type="text" placeholder="メールアドレスを入力">
            <label for="signin-pass">パスワード</label>
            <input id="signin-pass" name="password" type="text" placeholder="パスワードを入力">
            <button name="signin" type="submit">ログインする</button>
        </form>
        <div class="footer">
            <a href="/index">ホーム画面戻る</a>
        </div>
    </body>
</html>