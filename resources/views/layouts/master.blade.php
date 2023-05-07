<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="container-xl mt-3 border">    
            <div>
                @yield('heading')
            </div>
            <div>
                @yield('content')
            </div>
        </div>
    </body>
    <footer>
        @yield('footer')
    </footer>
</html>