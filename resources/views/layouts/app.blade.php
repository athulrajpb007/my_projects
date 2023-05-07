<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div id="app"></div>
            <script src="{{ mix('/js/app.js') }}"></script>
            <!-- <link rel="stylesheet" href="{{ mix('css/app.css', 'app') }}"> -->
        <div class="container-sm p-5 my-3 bg-success">
            @yield('heading')
        </div>
        <div class="container-md p-9">
            @yield('content')
        </div>
    </div>
    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer>
    <div class="container">
        <div class="container-sm p-3 my-3 bg-danger">
            @yield('footer')
        </div>
    </div>    
</footer>
</html>