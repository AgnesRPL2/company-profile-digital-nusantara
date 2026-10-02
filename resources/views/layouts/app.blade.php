<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'PT Digital Nusantara')
    </title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- NAVBAR -->

    <header class="navbar">

        <div class="nav-container">

            <a href="{{ route('home') }}" class="logo">
                <span>DN</span>
                Digital Nusantara
            </a>

            <button
                type="button"
                class="menu-toggle"
                id="menuToggle"
            >
                ☰
            </button>

            <nav class="nav-menu" id="navMenu">

                <a href="{{ route('home') }}">
                    Home
                </a>

                <a href="{{ route('about') }}">
                    About
                </a>

                <a href="{{ route('services') }}">
                    Services
                </a>

                <a href="{{ route('contact') }}">
                    Contact
                </a>

            </nav>

        </div>

    </header>


    <!-- CONTENT -->

    <main>

        @yield('content')

    </main>


    <!-- FOOTER -->

    <footer class="footer">

        <div class="container">

            <h3>PT Digital Nusantara</h3>

            <p>
                Solusi digital untuk kebutuhan bisnis modern.
            </p>

            <p class="copyright">
                © {{ date('Y') }} PT Digital Nusantara.
                All Rights Reserved.
            </p>

        </div>

    </footer>


    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
