<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-riwayat_pendidikan_formal')
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

@foreach($riwayat_pendidikan_formal as $riwayat_pendidikan_formals)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$riwayat_pendidikan_formals->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Pendidikan Formal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" class="sidetable">TINGKAT PENDIDIKAN</th>
                                <td><b>{{$riwayat_pendidikan_formals->tingkat_pendidikan}}</b></td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">NAMA SEKOLAH/UNIVERSITAS</th>
                                <td><b>{{$riwayat_pendidikan_formals->nama_sekolah}}</b></td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">JURUSAN/PROGRAM STUDI</th>
                                <td><b>{{$riwayat_pendidikan_formals->jurusan_prodi}}</b></td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TAHUN MASUK</th>
                                <td><b>{{$riwayat_pendidikan_formals->tahun_masuk}}</b></td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TAHUN LULUS</th>
                                <td><b>{{$riwayat_pendidikan_formals->tahun_lulus}}</b></td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TEMPAT BELAJAR</th>
                                <td><b>{{$riwayat_pendidikan_formals->tempat_belajar}}</b></td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">LOKASI</th>
                                <td><b>{{$riwayat_pendidikan_formals->lokasi}}</b></td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">NOMOR IJAZAH</th>
                                <td><b>{{$riwayat_pendidikan_formals->nomor_ijazah}}</b></td>
                            </tr>
                        </tbody>
                    </table>

            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tahun :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_pendidikan_formals->tahun}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tingkat Pendidikan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($riwayat_pendidikan_formals->tingkat_pendidikan == "01") 
                                                                                                            S3 (Setara)                                             
                                                                                                            @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "02") 
                                                                                                            S2 (Setara)                                              
                                                                                                            @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "03")                                    
                                                                                                            S1 (Setara)                      
                                                                                                            @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "04")                                              
                                                                                                            D4                                          
                                                                                                            @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "05")                                             
                                                                                                            SM                                       
                                                                                                            @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "06")                                   
                                                                                                            D3                                            
                                                                                                            @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "07")                                              
                                                                                                            D2                                               
                                                                                                            @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "08")                                             
                                                                                                            D1                                             
                                                                                                            @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "09")                                     
                                                                                                            SLTA                                    
                                                                                                            @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "10")                                       
                                                                                                            SLTP                                             
                                                                                                            @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "11")                                             
                                                                                                            SD
                                                                                                            @endif</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nama Sekolah :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_pendidikan_formals->nama_sekolah}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Jurusan Prodi :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_pendidikan_formals->jurusan_prodi}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tahun Masuk :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_pendidikan_formals->tahun_masuk}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tahun Lulus :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_pendidikan_formals->tahun_lulus}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tempat Belajar :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($riwayat_pendidikan_formals->tempat_belajar == "1")
                                                                                                            Dalam Negeri
                                                                                                            @elseif($riwayat_diklat_fungsionals->tempat_belajar == "2")
                                                                                                            Luar Negeri
                                                                                                            @endif</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Lokasi :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_pendidikan_formals->lokasi}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor Ijazah :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_pendidikan_formals->nomor_ijazah}}</b></h6></div>          
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Dasar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('riwayat_pendidikan_formal_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Tingkat Pendidikan</b></label>
                                                <div class="col-sm-10"><select name="tingkat_pendidikan" id="exampleSelect" class="form-control">
                                                <option value="" disabled selected>-Pilih Tingkat Pendidikan-</option>
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Sekolah / Universitas</b></label>
                                                <div class="col-sm-10"><input name="nama_sekolah" id="exampleEmail" placeholder="Nama Sekolah / Universitas" type="text" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jurusan / Program Studi</b></label>
                                                <div class="col-sm-10"><input name="jurusan_prodi" id="exampleEmail" placeholder="Jurusan / Program Studi" type="text" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tahun Masuk</b></label>
                                                <div class="col-sm-10"><input name="tahun_masuk" id="exampleEmail" placeholder="Tahun Masuk" type="number" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tahun Lulus</b></label>
                                                <div class="col-sm-10"><input name="tahun_lulus" id="exampleEmail" placeholder="Tahun Lulus" type="number" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Tempat Belajar</b></label>
                                                <div class="col-sm-10"><select name="tempat_belajar" id="exampleSelect" class="form-control">
                                                <option value="" disabled selected>-Pilih Tempat Belajar-</option>
                                                <option value="1">Dalam Negeri</option>
                                                <option value="2">Luar Negeri</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Lokasi</b></label>
                                                <div class="col-sm-10"><input name="lokasi" id="exampleEmail" placeholder="Lokasi" type="text" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor ijazah</b></label>
                                                <div class="col-sm-10"><input name="nomor_ijazah" id="exampleEmail" placeholder="Nomor ijazah" type="number" class="form-control" value=""></div>
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



@foreach($riwayat_pendidikan_formal as $riwayat_pendidikan_formals)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$riwayat_pendidikan_formals->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Dasar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="riwayat_pendidikan_formal/update/{{$riwayat_pendidikan_formals->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Tingkat Pendidikan</b></label>
                                                <div class="col-sm-10"><select name="tingkat_pendidikan" id="exampleSelect" class="form-control" value="{{ $riwayat_pendidikan_formals->tingkat_pendidikan }}" >
                                                @if($riwayat_pendidikan_formals->tingkat_pendidikan == "01")
                                                <option value="01" selected>S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "02")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02" selected>S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "03")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03" selected>S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "04")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04" selected>D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "05")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05" selected>SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "06")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06" selected>D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "07")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07" selected>D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "08")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08" selected>D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "09")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09" selected>SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "10")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10" selected>SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "11")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11" selected>SD</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Sekolah / Universitas</b></label>
                                                <div class="col-sm-10"><input name="nama_sekolah" id="exampleEmail" placeholder="Nama Sekolah / Universitas" type="text" class="form-control" value="{{ $riwayat_pendidikan_formals->nama_sekolah }}"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jurusan / Program Studi</b></label>
                                                <div class="col-sm-10"><input name="jurusan_prodi" id="exampleEmail" placeholder="Jurusan / Program Studi" type="text" class="form-control" value="{{ $riwayat_pendidikan_formals->jurusan_prodi }}"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tahun Masuk</b></label>
                                                <div class="col-sm-10"><input name="tahun_masuk" id="exampleEmail" placeholder="Tahun Masuk" type="number" class="form-control" value="{{ $riwayat_pendidikan_formals->tahun_masuk }}"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tahun Lulus</b></label>
                                                <div class="col-sm-10"><input name="tahun_lulus" id="exampleEmail" placeholder="Tahun Lulus" type="number" class="form-control" value="{{ $riwayat_pendidikan_formals->tahun_lulus }}"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Tempat Belajar</b></label>
                                                <div class="col-sm-10"><select name="tempat_belajar" id="exampleSelect" class="form-control" value="{{ $riwayat_pendidikan_formals->tempat_belajar }}">
                                                @if($riwayat_pendidikan_formals->tempat_belajar == "1")
                                                <option value="1" selected>Dalam Negeri</option>
                                                <option value="2">Luar Negeri</option>
                                                @elseif($riwayat_pendidikan_formals->tempat_belajar == "2")
                                                <option value="1">Dalam Negeri</option>
                                                <option value="2" selected>Luar Negeri</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Lokasi</b></label>
                                                <div class="col-sm-10"><input name="lokasi" id="exampleEmail" placeholder="Lokasi" type="text" class="form-control" value="{{ $riwayat_pendidikan_formals->lokasi }}"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor ijazah</b></label>
                                                <div class="col-sm-10"><input name="nomor_ijazah" id="exampleEmail" placeholder="Nomor ijazah" type="number" class="form-control" value="{{ $riwayat_pendidikan_formals->nomor_ijazah }}"></div>
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


@foreach($riwayat_pendidikan_formal as $riwayat_pendidikan_formals)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$riwayat_pendidikan_formals->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Dasar Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="riwayat_pendidikan_formal/delete/{{$riwayat_pendidikan_formals->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Dasar Pegawai" <b></b> </p></center></p>
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






