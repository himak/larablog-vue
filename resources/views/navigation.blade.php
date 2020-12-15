<nav class="navigation has-text-grey" role="navigation" aria-label="main navigation">

    {{-- LOGIN / REGISTER LINKS --}}
    @guest
        @if (Route::has('login'))
            <a href="{{ route('login') }}">{{ __('login') }}</a>
        @endif

        @if (Route::has('register'))
            <a href="{{ route('register') }}">{{ __('register') }}</a>
        @endif
    @endguest

    @auth
        {{-- LOGGED USER LINK --}}
        <a href="/users/{{ auth()->id() }}">
            @<strong>{{ auth()->user()->name }}</strong>
        </a>

        {{-- LOGOUT LINK --}}
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    @endauth
</nav>
