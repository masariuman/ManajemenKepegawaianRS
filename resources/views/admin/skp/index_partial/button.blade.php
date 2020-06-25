@if(auth()->user()->level == 'ADMIN')
    <a href="/it/skp/belum"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info active" id="sikpB">Pegawai yang Belum Mengisi SKP</button></a>
    <a href="/it/skp/sudah"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="strB">Pegawai yang Sudah Mengisi SKP</button></a>
@else
    <a href="/admin/skp/belum"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info active" id="sikpB">Pegawai yang Belum Mengisi SKP</button></a>
    <a href="/admin/skp/sudah"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="strB">Pegawai yang Sudah Mengisi SKP</button></a>
@endif
