<div class="tabs">
    {{-- tab for details user --}}
    <a href="{{ route('users.show', $user->id) }}" class="tab tab-lifted grow {{ Request::routeIs('user.show') ? 'tab-active' : ''}}">
    TImeLine
        <div class="badge ml-1">{{ $user->microposts_count }}</div>
    </a>
    {{-- tab for check all follow --}}
    <a href="{{ route("users.followings", $user->id) }}" class="tab tab-lifted grow {{ Request::routeIs('user.followings')? 'tab-active': '' }}">
        Followings
        <div class="badge ml-1">{{ $user->followings_count }}</div>
    </a>
    {{-- tab for check follower --}}
    <a href="{{ route('users.followers',$user->id) }}" class="tab tab-lifted grow {{ Request::routeIs('user.followers') ? 'tab-active' :  '' }}">
        Followers
        <div class="badge ml-1">{{ $user->followers_count }}</div>
    </a>
    <a href="{{ route('users.favorites',$user->id) }}" class="tab tab-lifted grow {{ Request::routeIs('user.favorites') ? 'tab-active' : '' }}">
        Likes
        <div class="badge ml-1">{{ $user->favorites_count }}</div>
    </a>
</div>
