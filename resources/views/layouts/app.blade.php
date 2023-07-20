<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Microposts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Micropost</title>
         <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>

        {{-- ナビゲーションバー --}}
        @include('common.navbar')

        <div class="container mx-auto">
            {{-- エラーメッセージ --}}
            @include('common.error_message')

            @yield('content')
        </div>

    </body>
</html>
