@extends("layouts.app")

@section("content")
    <div class="sm:grid sm:grid-cols-3 sm:gap-10">
        <aside class="mt-4">
            {{-- ユーザ情報 --}}
            @include("user.card")
        </aside>
    </div>
@endsection
