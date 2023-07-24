@extends("layouts.app")

@section("content")
    <div class="sm:grid sm:grid-cols-3 sm:gap-10">
        <aside class="mt-4">
            {{-- user data --}}
            @include("user.card")
        </aside>
        <div class="sm:col-span-2 mt-4">
            {{-- tab --}}
            @include("user.navtab")
            <div class="mt-4">
                @include("user.user")
            </div>
        </div>
    </div>
@endsection
