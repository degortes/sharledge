<header>
    <div>
        <a href="{{route('home')}}">
            <h1>
                Sharledge
            </h1>
        </a>
    </div>
    <div>
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ route('admin.home') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

</header>
