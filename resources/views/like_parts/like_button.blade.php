@if (Auth::user()->is_favorite($micropost->id))
    {{-- form for unlike --}}
    <form action="{{ route('users.unlike', $micropost->id) }}" method="post">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-error btn-sm normal-case basis-1/2">calcel</button>
    </form>
@else
    {{-- form for like --}}
    <form action="{{ route('users.like', $micropost->id) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary btn-sm normal-case basis-1/2">like</button>
    </form>
@endif
