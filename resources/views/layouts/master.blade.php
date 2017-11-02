<!DOCTYPE html>
<html lang='en'>
<head>
    <title> My Site | @yield('title', 'Default Title') </title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    @section('footerScripts')
        <script src="{{ asset('app.js') }}"></script>
    @show
</body>
</html>