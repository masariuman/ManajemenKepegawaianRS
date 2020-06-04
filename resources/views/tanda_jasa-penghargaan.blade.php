<!doctype html>
<html lang="en">
 <head>
     @include('content.meta')
     <title>Manajemen RSUNTAN</title>
     @include('content.css')
 </head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
     @include('content.header')
     @include('content.ui')
     @include('content.main-tanda_jasa-penghargaan')
    </div>
    @include('content.js')
</body>
</html>