<!doctype html>
<html lang="en">

@include('includes.head')

<body>

<dir class="container">
    <header>
        @include('includes.menu')
    </header>

    <main role="main">
        @yield('content')
    </main>

    @include('includes.jsfooter')

    <footer>
        @include('includes.footer')
    </footer>
</dir>
</body>
</html>