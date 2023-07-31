@if (isset($users))
    <ul class="list-none">
        @foreach ($users as $user)
            <li class="flex items-center gap-x-2 mb-4">
                {{-- view Graatar from user mail adress --}}
                <div class="acatar">
                    <div class="w-12 rounded">
                        <img src="{{ Gravatar::get($user->email) }}" alt="" />
                    </div>
                </div>
                <div>
                    <div>
                        {{ $user->name }}
                    </div>
                    <div>
                    {{-- link to user details page --}}
                    <p><a href="{{ route('users.show', $user->id) }}" class="link link-hovor text-info">View profile</a></p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- link to pagination --}}
    {{ $users->links() }}
@endif
