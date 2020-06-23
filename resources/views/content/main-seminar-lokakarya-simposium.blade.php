<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-seminar-lokakarya-simposium')
    @push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/fh-3.1.7/r-2.2.5/sp-1.1.1/sl-1.3.1/datatables.min.css"/>
    <style>
        .width100{
            width: 100%;
        }
        .width100px{
            width: 100px;
        }
        .width40{
            width: 40px;
        }
        .width200{
            width: 200px;
        }
        .margintop20 {
            margin-top: 20px;
        }
        .margintop50 {
            margin-top: 50px;
        }
        .sidetable{
            background-image: url(/lojin/sidebarx.png);
            background-repeat: no-repeat;
            width: 500px;
            height: 41px;
            color: #ffffff;
        }
        .titlepertab {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 40px;
            letter-spacing: 0px;
            word-spacing: 0px;
            color: #000000;
            font-weight: 700;
            text-decoration: none solid rgb(68, 68, 68);
            font-style: normal;
            font-variant: small-caps;
            text-transform: capitalize;
            margin-top: 40px;
            margin-bottom: 40px;
        }
    </style>
@endpush
    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>

@foreach($seminar_lokakarya_simposium as $seminar_lokakarya_simposiums)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$seminar_lokakarya_simposiums->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Seminar / Lokakarya / Simposium</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">NAMA KEGIATAN</th>
                            <td><b>{{$seminar_lokakarya_simposiums->nama_kegiatan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">LOKASI KEGIATAN</th>
                            <td><b>{{$seminar_lokakarya_simposiums->lokasi}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TEMPAT KEGIATAN</th>
                            <td><b>  @if($seminar_lokakarya_simposiums->tempat_kegiatan == "1")
                                     Dalam Negeri                                                
                                     @elseif($seminar_lokakarya_simposiums->tempat_kegiatan == "1")                                                
                                     Luar Negeri
                                     @endif</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PENYELENGGARA</th>
                            <td><b>{{$seminar_lokakarya_simposiums->penyelenggara}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TAHUN SEMINAR</th>
                            <td><b>{{$seminar_lokakarya_simposiums->tahun_seminar}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KEDUDUKAN DALAM SEMINAR</th>
                            <td><b>@if($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "1")
                                   Peserta                                               
                                   @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "2")                                               
                                   Moderator                                               
                                   @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "3")                                                                                             
                                   Pembahas                                                
                                   @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "4")                                            
                                   Pembawa Makalah
                                   @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "5")                                              
                                   Panitia
                                   @endif</b></td>
                        </tr>
                    </tbody>
                </table>
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tahun :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$seminar_lokakarya_simposiums->tahun}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nama Kegiatan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$seminar_lokakarya_simposiums->nama_kegiatan}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Lokasi Kegiatan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$seminar_lokakarya_simposiums->lokasi}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tempat Kegiatan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>  @if($seminar_lokakarya_simposiums->tempat_kegiatan == "1")
                                                                                                            Dalam Negeri                                                
                                                                                                            @elseif($seminar_lokakarya_simposiums->tempat_kegiatan == "1")                                                
                                                                                                            Luar Negeri
                                                                                                            @endif</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Penyelenggara :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$seminar_lokakarya_simposiums->penyelenggara}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tahun Seminar :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$seminar_lokakarya_simposiums->tahun_seminar}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Kedudukan Dalam Seminar :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "1")
                                                                                                            Peserta                                               
                                                                                                            @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "2")                                               
                                                                                                            Moderator                                               
                                                                                                            @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "3")                                                                                             
                                                                                                            Pembahas                                                
                                                                                                            @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "4")                                            
                                                                                                            Pembawa Makalah
                                                                                                            @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "5")                                              
                                                                                                            Panitia
                                                                                                            @endif</b></h6></div>          
                                            </div> -->
 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Tutup</button>
                <!-- <button type="button" class="btn btn-info"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use check"></i> Done</button> -->
            </div>
        </div>
    </div>
</div>
<!-- Modal Lihat -->
@endforeach



<!-- Modal Tambah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeTambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Seminar / Lokakarya / Simposium</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('seminar_lokakarya_simposium_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Kegiatan</b></label>
                                                <div class="col-sm-10"><input name="nama_kegiatan" id="exampleEmail" placeholder="Nama Kegiatan" type="text" class="form-control" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Lokasi Kegiatan</b></label>
                                                <div class="col-sm-10"><input name="lokasi" id="exampleEmail" placeholder="Lokasi Kegiatan" type="text" class="form-control" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Tempat Kegiatan</b></label>
                                                <div class="col-sm-10"><select name="tempat_kegiatan" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Tempat Kegiatan-</option>
                                                <option value="1">Dalam Negeri</option>
                                                <option value="2">Luar Negeri</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Penyelenggara</b></label>
                                                <div class="col-sm-10"><input name="penyelenggara" id="exampleEmail" placeholder="Penyelenggara" type="text" class="form-control" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tahun</b></label>
                                                <div class="col-sm-10"><input name="tahun_seminar" id="exampleEmail" placeholder="Tahun" type="number" class="form-control" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Kedudukan Dalam Seminar</b></label>
                                                <div class="col-sm-10"><select name="kedudukan_dalam_seminar" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Kedudukan Dalam Seminar-</option>
                                                <option value="1">Peserta</option>
                                                <option value="2">Moderator</option>
                                                <option value="3">Pembahas</option>
                                                <option value="4">Pembawa Makalah</option>
                                                <option value="5">Panitia</option>
                                                </select></div>
                                            </div>                   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                <button type="submit" class="btn btn-light"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Tambah -->



@foreach($seminar_lokakarya_simposium as $seminar_lokakarya_simposiums)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$seminar_lokakarya_simposiums->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Seminar / Lokakarya / Simposium</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="seminar_lokakarya_simposium/update/{{$seminar_lokakarya_simposiums->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Kegiatan</b></label>
                                                <div class="col-sm-10"><input name="nama_kegiatan" id="exampleEmail" placeholder="Nama Kegiatan" type="text" class="form-control" value="{{$seminar_lokakarya_simposiums->nama_kegiatan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Lokasi Kegiatan</b></label>
                                                <div class="col-sm-10"><input name="lokasi" id="exampleEmail" placeholder="Lokasi Kegiatan" type="text" class="form-control" value="{{$seminar_lokakarya_simposiums->lokasi}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Tempat Kegiatan</b></label>
                                                <div class="col-sm-10"><select name="tempat_kegiatan" id="exampleSelect" class="form-control" value="{{$seminar_lokakarya_simposiums->tempat_kegiatan}}" required>
                                                <option value="" disabled selected>-Pilih Tempat Kegiatan-</option>
                                                @if($seminar_lokakarya_simposiums->tempat_kegiatan == "1")
                                                <option value="1" selected>Dalam Negeri</option>
                                                <option value="2">Luar Negeri</option>
                                                @elseif($seminar_lokakarya_simposiums->tempat_kegiatan == "1")
                                                <option value="1">Dalam Negeri</option>
                                                <option value="2" selected>Luar Negeri</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Penyelenggara</b></label>
                                                <div class="col-sm-10"><input name="penyelenggara" id="exampleEmail" placeholder="Penyelenggara" type="text" class="form-control" value="{{$seminar_lokakarya_simposiums->penyelenggara}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tahun</b></label>
                                                <div class="col-sm-10"><input name="tahun_seminar" id="exampleEmail" placeholder="Tahun" type="number" class="form-control" value="{{$seminar_lokakarya_simposiums->tahun_seminar}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Kedudukan Dalam Seminar</b></label>
                                                <div class="col-sm-10"><select name="kedudukan_dalam_seminar" id="exampleSelect" class="form-control" value="{{$seminar_lokakarya_simposiums->kedudukan_dalam_seminar}}" required>
                                                <option value="" disabled selected>-Pilih Kedudukan Dalam Seminar-</option>
                                                @if($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "1")
                                                <option value="1" selected>Peserta</option>
                                                <option value="2">Moderator</option>
                                                <option value="3">Pembahas</option>
                                                <option value="4">Pembawa Makalah</option>
                                                <option value="5">Panitia</option>
                                                @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "2")
                                                <option value="1">Peserta</option>
                                                <option value="2" selected>Moderator</option>
                                                <option value="3">Pembahas</option>
                                                <option value="4">Pembawa Makalah</option>
                                                <option value="5">Panitia</option>
                                                @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "3")
                                                <option value="1">Peserta</option>
                                                <option value="2">Moderator</option>
                                                <option value="3" selected>Pembahas</option>
                                                <option value="4">Pembawa Makalah</option>
                                                <option value="5">Panitia</option>
                                                @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "4")
                                                <option value="1">Peserta</option>
                                                <option value="2">Moderator</option>
                                                <option value="3">Pembahas</option>
                                                <option value="4" selected>Pembawa Makalah</option>
                                                <option value="5">Panitia</option>
                                                @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "5")
                                                <option value="1">Peserta</option>
                                                <option value="2">Moderator</option>
                                                <option value="3">Pembahas</option>
                                                <option value="4">Pembawa Makalah</option>
                                                <option value="5" selected>Panitia</option>
                                                @endif
                                                </select></div>
                                            </div>  
                                      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                <button type="submit" class="btn btn-light"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Ubah</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Ubah -->
@endforeach


@foreach($seminar_lokakarya_simposium as $seminar_lokakarya_simposiums)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$seminar_lokakarya_simposiums->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Seminar / Lokakarya / Simposium</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="seminar_lokakarya_simposium/delete/{{$seminar_lokakarya_simposiums->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Seminar / Lokakarya / Simposium" <b></b> </p></center></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                <button type="submit" class="btn btn-light"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i> Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Small modal Delete -->
@endforeach

