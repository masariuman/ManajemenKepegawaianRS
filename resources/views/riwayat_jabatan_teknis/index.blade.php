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
     <!-- @include('content.ui') -->
     @include('riwayat_jabatan_teknis.indexContent.main')
    </div>
    @include('content.js')
</body>
</html>