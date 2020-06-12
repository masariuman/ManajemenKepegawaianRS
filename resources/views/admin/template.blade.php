<!doctype html>
<html lang="en">
<head>
     @include('content.meta')
     <title>Manajemen RSUNTAN</title>
     @include('content.css')
     @stack('css')
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('content.header')
        @include('content.ui')
        <div class="app-main">
            @include('content.sidebar')
            <div class="app-main__outer">
            @yield('content')
            @include('content.footer')
            </div>
            <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    @stack('model')
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    @stack('js')
</body>
</html>
