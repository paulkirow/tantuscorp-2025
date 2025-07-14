<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'My Site')</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />


        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>

    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Home</a>
        </div>
    </nav>
    <header class="mb-5 text-center">
        <h1>TANTUS</h1>
        <hr />
        <h2>CORPORATION</h2>
    </header>

    <main class="container">
        <section>
            <h3>Industrial Chillers You Can Trust</h3>
            <p>
                TANTUS Corporation delivers state-of-the-art industrial chillers with unmatched performance and durability.
                Designed to keep your systems cool under the harshest conditions.
            </p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </section>

        <section class="section row text-center">
            <div class="col-md-4">
                <div class="feature-icon">❄️</div>
                <h4>Efficient Cooling</h4>
                <p>High-performance chillers designed for energy efficiency and low maintenance.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon">⚙️</div>
                <h4>Durable Build</h4>
                <p>Rugged construction using premium materials to withstand industrial environments.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon">🔧</div>
                <h4>Easy Service</h4>
                <p>Simple maintenance protocols and responsive customer support.</p>
            </div>
        </section>
    </main>

    </body>
</html>
