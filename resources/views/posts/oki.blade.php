<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-4xl">お気に入り登録</h2>
    </div>
    <!-- text - end -->

    <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
      <!-- article - start -->
      @foreach ($likes as $like)
        @php
         dd( $like->users);
        @endphp
      @endforeach
      <!-- article - end -->
    </div>
  </div>
</div>
 </body>
</html>