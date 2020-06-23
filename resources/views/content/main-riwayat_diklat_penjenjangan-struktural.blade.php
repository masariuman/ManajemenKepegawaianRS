<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-riwayat_diklat_penjenjangan-struktural')
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

@foreach($riwayat_diklat_penjenjangan_struktural as $riwayat_diklat_penjenjangan_strukturals)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$riwayat_diklat_penjenjangan_strukturals->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Riwayat Diklat Penjenjang / Struktural</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">JENIS DIKLAT</th>
                            <td><b>@if($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "1")
                                    Diklatpim Tk I
                                    @elseif($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "2")
                                    Diklatpim Tk II                                              
                                    @elseif($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "3")
                                    Diklatpim Tk III
                                    @elseif($riwayat_diklat_penjenjangan_strukturals->id == "4")
                                    Diklatpim Tk IV Atau diklat lain yang setara
                                    @endif</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">ANGKATAN</th>
                            <td><b>{{$riwayat_diklat_penjenjangan_strukturals->angkatan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">LOKASI</th>
                            <td><b>{{$riwayat_diklat_penjenjangan_strukturals->lokasi}}</b></td>
                        </tr>
                      
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL MULAI</th>
                            <td><b>{{ date('d/m/Y',strtotime($riwayat_diklat_penjenjangan_strukturals->tanggal_mulai)) }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL SELESAI</th>
                            <td><b>{{ date('d/m/Y',strtotime($riwayat_diklat_penjenjangan_strukturals->tanggal_selesai)) }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH JAM</th>
                            <td><b>{{$riwayat_diklat_penjenjangan_strukturals->jumlah_jam}}</b></td>
                        </tr>
                            <th scope="row" class="sidetable">PENYELENGGARA</th>
                            <td><b>{{$riwayat_diklat_penjenjangan_strukturals->penyelenggara}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PREDIKAT</th>
                            <td><b>{{$riwayat_diklat_penjenjangan_strukturals->predikat}}</b></td>
                        </tr>
                  
                     
                    </tbody>
                </table>
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tahun :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_diklat_penjenjangan_strukturals->tahun}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Jenis Diklat :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>                                       @if($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "1")
                                                                                                                                                    Diklatpim Tk I
                                                                                                                                                    @elseif($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "2")
                                                                                                                                                    Diklatpim Tk II                                              
                                                                                                                                                    @elseif($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "3")
                                                                                                                                                    Diklatpim Tk III
                                                                                                                                                    @elseif($riwayat_diklat_penjenjangan_strukturals->id == "4")
                                                                                                                                                    Diklatpim Tk IV Atau diklat lain yang setara
                                                                                                                                                    @endif</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Angkatan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_diklat_penjenjangan_strukturals->angkatan}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Lokasi :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_diklat_penjenjangan_strukturals->lokasi}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tanggal Mulai :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($riwayat_diklat_penjenjangan_strukturals->tanggal_mulai)) }}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tanggal Selesai :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($riwayat_diklat_penjenjangan_strukturals->tanggal_selesai)) }}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Jumlah Jam :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_diklat_penjenjangan_strukturals->jumlah_jam}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Penyelenggara :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_diklat_penjenjangan_strukturals->penyelenggara}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Predikat :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$riwayat_diklat_penjenjangan_strukturals->predikat}}</b></h6></div>          
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Riwayat Diklat Penjenjang / Struktural</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('riwayat_diklat_penjenjangan_struktural_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Diklat</b></label>
                                                <div class="col-sm-10"><select name="jenis_diklat" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Jenis Diklat-</option>
                                                <option value="1">Diklatpim Tk I</option>
                                                <option value="2">Diklatpim Tk II</option>
                                                <option value="3">Diklatpim Tk III</option>
                                                <option value="4">Diklatpim Tk IV Atau diklat lain yang setara</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Angkatan</b></label>
                                                <div class="col-sm-10"><input name="angkatan" id="exampleEmail" placeholder="Angkatan" type="number" class="form-control" value="" required</div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>lokasi</b></label>
                                                <div class="col-sm-10"><input name="lokasi" id="exampleEmail" placeholder="Penyelenggara" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Mulai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_mulai" id="exampleEmail" placeholder="Tanggal Mulai" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Selesai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_selesai" id="exampleEmail" placeholder="Tanggal Selesai" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Jam</b></label>
                                                <div class="col-sm-10"><input name="jumlah_jam" id="exampleEmail" placeholder="Jumlah Jam" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Penyelenggara</b></label>
                                                <div class="col-sm-10"><input name="penyelenggara" id="exampleEmail" placeholder="Penyelenggara" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Predikat</b></label>
                                                <div class="col-sm-10"><input name="predikat" id="exampleEmail" placeholder="Predikat" type="text" class="form-control" value="" required></div>          
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



@foreach($riwayat_diklat_penjenjangan_struktural as $riwayat_diklat_penjenjangan_strukturals)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$riwayat_diklat_penjenjangan_strukturals->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Riwayat Diklat Penjenjang / Struktural</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="riwayat_diklat_penjenjangan_struktural/update/{{$riwayat_diklat_penjenjangan_strukturals->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Diklat</b></label>
                                                <div class="col-sm-10"><select name="jenis_diklat" id="exampleSelect" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->jenis_diklat}}" required>
                                                <option value="" disabled selected>-Pilih Jenis Diklat-</option>
                                                @if($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "1")
                                                <option value="1" selected>Diklatpim Tk I</option>
                                                <option value="2">Diklatpim Tk II</option>
                                                <option value="3">Diklatpim Tk III</option>
                                                <option value="4">Diklatpim Tk IV Atau diklat lain yang setara</option>
                                                @elseif($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "2")
                                                <option value="1">Diklatpim Tk I</option>
                                                <option value="2" selected>Diklatpim Tk II</option>
                                                <option value="3">Diklatpim Tk III</option>
                                                <option value="4">Diklatpim Tk IV Atau diklat lain yang setara</option>
                                                @elseif($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "3")
                                                <option value="1">Diklatpim Tk I</option>
                                                <option value="2">Diklatpim Tk II</option>
                                                <option value="3" selected>Diklatpim Tk III</option>
                                                <option value="4">Diklatpim Tk IV Atau diklat lain yang setara</option>
                                                @elseif($riwayat_diklat_penjenjangan_strukturals->id == "4")
                                                <option value="1">Diklatpim Tk I</option>
                                                <option value="2">Diklatpim Tk II</option>
                                                <option value="3">Diklatpim Tk III</option>
                                                <option value="4" selected>Diklatpim Tk IV Atau diklat lain yang setara</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Angkatan</b></label>
                                                <div class="col-sm-10"><input name="angkatan" id="exampleEmail" placeholder="Angkatan" type="number" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->angkatan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>lokasi</b></label>
                                                <div class="col-sm-10"><input name="lokasi" id="exampleEmail" placeholder="Penyelenggara" type="text" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->lokasi}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Mulai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_mulai" id="exampleEmail" placeholder="Tanggal Mulai" type="date" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->tanggal_mulai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Selesai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_selesai" id="exampleEmail" placeholder="Tanggal Selesai" type="date" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->tanggal_selesai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Jam</b></label>
                                                <div class="col-sm-10"><input name="jumlah_jam" id="exampleEmail" placeholder="Jumlah Jam" type="number" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->jumlah_jam}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Penyelenggara</b></label>
                                                <div class="col-sm-10"><input name="penyelenggara" id="exampleEmail" placeholder="Penyelenggara" type="text" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->penyelenggara}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Predikat</b></label>
                                                <div class="col-sm-10"><input name="predikat" id="exampleEmail" placeholder="Predikat" type="text" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->predikat}}" required></div>          
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


@foreach($riwayat_diklat_penjenjangan_struktural as $riwayat_diklat_penjenjangan_strukturals)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$riwayat_diklat_penjenjangan_strukturals->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Riwayat Penjenjang / Struktural</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="riwayat_diklat_penjenjangan_struktural/delete/{{$riwayat_diklat_penjenjangan_strukturals->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Riwayat Penjenjang / Struktural" <b></b> </p></center></p>
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


