<!DOCTYPE html>
<html lang="en">
<head>
    <title>Finder</title>
    @include('design.head')
</head>

<main style="flex: 1 0 auto;">
    <body class="bg-dark">
    <header class="text-white navbar-expand-lg bg-dark fixed-top">
        @include('design.nav')
    </header>

    <section class="bg-position-top-center bg-repeat-0 pt-5 h-100 hero-bg">
        <div class="container my-5 py-5">
            @yield('page-content')
        </div>
    </section>

    <footer class="bg-faded-light">
        @include('design.footer')
    </footer>
    </body>
</main>
</html>
