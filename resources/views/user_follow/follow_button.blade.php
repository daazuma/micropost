@if (Auth::id() !=$user->id)
    @if (Auth::user()->is_following($user->id))
    {{-- form to unfollow user --}}
    <form action="{{ route('user.unfollow',$user->id) }}" method="post">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-error btn-block normal-case" onclick="return confirm('id = {{ $user->id }}のフォローを外します、よろしいですか？')">Unfollow</button>
    </form>
    @else
    {{-- form to follow user --}}
    <form action="{{ route('user.follow',$user->id) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary btn-block normal-case">Follow</button>
    </form>
    @endif
@endif
