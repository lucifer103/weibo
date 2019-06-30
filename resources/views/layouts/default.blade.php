<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Weibo App') - Laravel 新手入门教程</title>
        {{-- 改写法不会动态加载样式 --}}
        {{-- <link rel="stylesheet" href="/css/app.css"> --}}
        {{-- mix() 方法与 webpack.mix.js 文件里的逻辑遥相呼应 --}}
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        @include('layouts._header')

        <div class="container">
            <div class="offset-md-1 col-md-10">
                @include('shared._messages')
                @yield('content')
                @include('layouts._footer')
            </div>
        </div>
    </body>
</html>

