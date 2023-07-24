@extends("layouts.app")

@section("content")
<div class="sm:grid sm:grid-cols-3 sm:gap-10">
    <aside class="mt-4">
        {{-- ユーザ情報 --}}
        @include('user.card')
    </aside>
    <div class="sm:col-span-2 mt-4">
        {{-- tab --}}
        @include("user.navtab")
        {{-- 投稿フォーム --}}
        @include('micropost.form')
        {{-- 投稿一覧 --}}
        @include('micropost.micropost')
    </div>
</div>
@endsection
