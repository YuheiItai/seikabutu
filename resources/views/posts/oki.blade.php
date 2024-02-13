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
        @if(empty($like))
        @else
            <p>{{ $like->user->name }}さんが{{ $like->onsen->name }}いいねをしました。</p>
        @endif
      <!-- article - end -->
    </div>
  </div>
  <h1>温泉一覧</h1>
@foreach( $onsens as $a )
        <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
        <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
          <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        </a>

        <div class="flex flex-1 flex-col p-4 sm:p-6">
          <h2 class="mb-2 text-lg font-semibold text-gray-800">
            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">{{ $a->onsen->name}}</a>
          </h2>
          <p class="mb-8 text-gray-500">{{ $a->onsen->body}}</p>
            
            <div class="mt-auto flex items-end justify-between">
              <a href='/like/{{ $a->onsen->id }}' class="text-red-500 text-2xl">♡</a>
            </div>
          </div>
        </div>
@endforeach
</div>
 </body>
</html>