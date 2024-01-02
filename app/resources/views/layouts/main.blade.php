<!doctype html>
<html>
    @include('layouts._head')
    <body>
        @include('layouts._header')
        @include('layouts._nav')
        <main>
        @yield('content')
        </main>
        @include('layouts._footer')
        @include('layouts._scripts')
    </body>
</html>
