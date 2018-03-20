<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Le Stadium | Administration</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div id="app">
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo center">Administration</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/">Retour au site</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/admin.js') }}"></script>

</body>
</html>
