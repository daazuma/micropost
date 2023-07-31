@if (Auth::check())
    {{-- link to view all user --}}
    <li><a class="link link-hover" href="{{ route('users.index') }}">User</a></li>
    {{-- link to user details --}}
    <li><a href="{{ route('users.show',Auth::user()->id) }}" class="link link-hover">{{ Auth::user()->name }}&#39;s plofile</a></li>
    <li class="divider lg:hidden"></li>
    {{-- link to logout --}}
    <li><a href="#" class="link link-hover" onclick="event.preventDefault();this.closest('form').submit();">Logout</a></li>
@else
    {{-- link to register user --}}
    <li><a class="link link-hover" href="{{ route('register') }}">Signup</a></li>
    <li class="divider lg:hidden"></li>
    {{-- link to login page --}}
    <li><a href="{{ route('login') }}" class="link ">Login</a></li>
@endif
