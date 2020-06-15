<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-keluarga_istri-suami')
    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>

@foreach($keluarga_istri_suami as $keluarga_istri_suamis)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$keluarga_istri_suamis->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Keluarga Istri Suami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tahun :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$keluarga_istri_suamis->tahun}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Golongan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$keluarga_istri_suamis->golongan}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>TMT Golongan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$keluarga_istri_suamis->tmt_golongan}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Pejabat Penandatangan SK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$keluarga_istri_suamis->pejabat_penandatangan_sk}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor SK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$keluarga_istri_suamis->nomor_sk}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tanggal SK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$keluarga_istri_suamis->tanggal_sk}}</b></h6></div>          
                                            </div>
 
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Keluarga Istri Suami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('keluarga_istri_suami_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama</b></label>
                                                <div class="col-sm-10"><input name="nama" id="exampleEmail" placeholder="Nama" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Hubungan</b></label>
                                                <div class="col-sm-10"><select name="hubungan" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Hubungan-</option>
                                                <option value="1">Ayah</option>
                                                <option value="2">Ibu</option>
                                                <option value="3">Kakak</option>
                                                <option value="4">Adik</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pekerjaan</b></label>
                                                <div class="col-sm-10"><input name="pekerjaan" id="exampleEmail" placeholder="Pekerjaan" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Kelamin</b></label>
                                                <div class="col-sm-10"><select name="jenis_kelamin" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Jenis Kelamin-</option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Kondisi</b></label>
                                                <div class="col-sm-10"><select name="kondisi" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Kondisi-</option>
                                                <option value="1">Masih Hidup</option>
                                                <option value="0">Almarhun</option>
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



@foreach($keluarga_istri_suami as $keluarga_istri_suamis)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$keluarga_istri_suamis->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Keluarga Istri Suami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="keluarga_istri_suami/update/{{$keluarga_istri_suamis->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama</b></label>
                                                <div class="col-sm-10"><input name="nama" id="exampleEmail" placeholder="Nama" type="text" class="form-control" value="{{$keluarga_istri_suamis->nama}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Hubungan</b></label>
                                                <div class="col-sm-10"><select name="hubungan" id="exampleSelect" class="form-control" value="{{$keluarga_istri_suamis->hubungan}}" required>
                                                @if($keluarga_istri_suamis->hubungan == "1")
                                                <option value="1" selected>Ayah</option>
                                                <option value="2">Ibu</option>
                                                <option value="3">Kakak</option>
                                                <option value="4">Adik</option>
                                                @elseif($keluarga_istri_suamis->hubungan == "2")
                                                <option value="1">Ayah</option>
                                                <option value="2" selected>Ibu</option>
                                                <option value="3">Kakak</option>
                                                <option value="4">Adik</option>
                                                @elseif($keluarga_istri_suamis->hubungan == "3")
                                                <option value="1">Ayah</option>
                                                <option value="2">Ibu</option>
                                                <option value="3" selected>Kakak</option>
                                                <option value="4">Adik</option>
                                                @elseif($keluarga_istri_suamis->hubungan == "4")
                                                <option value="1">Ayah</option>
                                                <option value="2">Ibu</option>
                                                <option value="3">Kakak</option>
                                                <option value="4" selected>Adik</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pekerjaan</b></label>
                                                <div class="col-sm-10"><input name="pekerjaan" id="exampleEmail" placeholder="Pekerjaan" type="text" class="form-control" value="{{$keluarga_istri_suamis->pekerjaan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir" type="date" class="form-control" value="{{$keluarga_istri_suamis->tanggal_lahir}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Kelamin</b></label>
                                                <div class="col-sm-10"><select name="jenis_kelamin" id="exampleSelect" class="form-control" required value="{{$keluarga_istri_suamis->jenis_kelamin}}">
                                                <option value="" disabled selected>-Pilih Jenis Kelamin-</option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Kondisi</b></label>
                                                <div class="col-sm-10"><select name="kondisi" id="exampleSelect" class="form-control" required value="{{$keluarga_istri_suamis->kondisi}}">
                                                <option value="" disabled selected>-Pilih Kondisi-</option>
                                                <option value="1">Masih Hidup</option>
                                                <option value="0">Almarhun</option>
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


@foreach($keluarga_istri_suami as $keluarga_istri_suamis)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$keluarga_istri_suamis->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Keluarga Istri Suami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="keluarga_istri_suami/delete/{{$keluarga_istri_suamis->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Keluarga Istri Suami" <b></b> </p></center></p>
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
