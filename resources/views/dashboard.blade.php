@extends("layouts.app")

@section("content")
    <div class="prose hero bg-base-200 mx-auto max-w-full rounded">
        <div class="hero-content text-center my-10">
            <div class="mac-w-md mb-10">
                <h2>Welcome to the Micropost</h2>
                {{-- link to register user page --}}
                <a class="btn btn-primary btn-lg normal-case" href="{{ route('register') }}">Sign up now</a>
            </div>
        </div>
    </div>
@endsection
