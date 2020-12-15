<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <header class="site-header">
        <h1 class="title logo">
            <a href="/">(ಠ_ಠ)</a>
        </h1>
    </header>

    @guest
        <h1 class="title">som neprihlaseny</h1>
    @endguest

    @auth
        <h1 class="title">som LOGGED. THE FUCK. IN.</h1>

        <code>
            {{ auth()->user() }}
        </code>
    @endauth



    <div id="app">
        <main class="columns is-centered">
            <section class="column is-three-fifths">
                @yield('content')
            </section>
        </main>
    </div>

</body>
</html>
