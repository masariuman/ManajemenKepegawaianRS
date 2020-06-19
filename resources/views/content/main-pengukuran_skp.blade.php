<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-pengukuran_skp')
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

@foreach($pengukuran_skp as $pengukuran_skps)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$pengukuran_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Pengukuran SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">KEGIATAN TUGAS TAMBAHAN</th>
                            <td><b>{{$pengukuran_skps->kegiatan_tugas_tambahan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KATEGORI</th>
                            <td><b>{{$pengukuran_skps->kategori}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">AK TARGET</th>
                            <td><b>{{$pengukuran_skps->ak_target}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TARGET KUANT OUTPUT 1</th>
                            <td><b>{{$pengukuran_skps->target_kuant_output_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TARGET KUANT OUTPUT 2</th>
                            <td><b>{{$pengukuran_skps->target_kuant_output_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TARGET KUAL MUTU</th>
                            <td><b>{{$pengukuran_skps->target_kual_mutu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TARGET BIAYA</th>
                            <td><b>{{$pengukuran_skps->target_biaya}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">AK REALISASI</th>
                            <td><b>{{$pengukuran_skps->ak_realisasi}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">REALISASI KUANT OUTPUT 1</th>
                            <td><b>{{$pengukuran_skps->realisasi_kuant_output_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">REALISASI KUANT OUTPUT 1</th>
                            <td><b>{{$pengukuran_skps->realisasi_kuant_output_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">REALISASI KAUL MUTU</th>
                            <td><b>{{$pengukuran_skps->realisasi_kual_mutu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">REALISASI BIAYA</th>
                            <td><b>{{$pengukuran_skps->realisasi_biaya}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">Perhitungan</th>
                            <td><b>{{$pengukuran_skps->penghitungan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">Nilai Capaian SKP</th>
                            <td><b>{{$pengukuran_skps->nilai_capaian_skp}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL AK TARGET</th>
                            <td><b>{{$pengukuran_skps->total_ak_target}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL TARGET KUANT OUTPUT 1</th>
                            <td><b>{{$pengukuran_skps->total_target_kuant_output_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL TARGET KUANT OUTPUT 2</th>
                            <td><b>{{$pengukuran_skps->total_target_kuant_output_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL TARGET KUAL MUTU</th>
                            <td><b>{{$pengukuran_skps->total_target_kual_mutu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL TARGET BIAYA</th>
                            <td><b>{{$pengukuran_skps->total_target_biaya}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL AK REALISASI</th>
                            <td><b>{{$pengukuran_skps->total_ak_realisasi}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL REALISASI KUANT OUTPUT 1</th>
                            <td><b>{{$pengukuran_skps->total_realisasi_kuant_output_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL REALISASI KUANT OUTPUT 2</th>
                            <td><b>{{$pengukuran_skps->total_realisasi_kuant_output_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL REALISASI KUAL MUTU</th>
                            <td><b>{{$pengukuran_skps->total_realisasi_kual_mutu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL REALISASI BIAYA</th>
                            <td><b>{{$pengukuran_skps->total_realisasi_biaya}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL PERHITUNGAN</th>
                            <td><b>{{$pengukuran_skps->total_penghitungan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL NILAI CAPAIAN SKP 1</th>
                            <td><b>{{$pengukuran_skps->total_nilai_capaian_skp_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL NILAI CAPAIAN SKP 2</th>
                            <td><b>{{$pengukuran_skps->total_nilai_capaian_skp_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL NILAI CAPAI SKP 3</th>
                            <td><b>{{$pengukuran_skps->total_nilai_capaian_skp_3}}</b></td>
                        </tr>
                    </tbody>
                </table>
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tahun :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pengukuran_skps->tahun}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nama Penghargaan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pengukuran_skps->nama_penghargaan}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tanggal Perolehan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pengukuran_skps->tanggal_perolehan)) }}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pengukuran_skps->nomor}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Negara / Instansi Pemberi :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pengukuran_skps->pemberi}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Jabatan Pemberi :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pengukuran_skps->jabatan_pemberi}}</b></h6></div>          
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Pengukuran SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('pengukuran_skp_tambah')}}" method="post">
                                            @csrf 
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kegiatan Tugas Tambahan</b></label>
                                                <div class="col-sm-10"><input name="kegiatan_tugas_tambahan" id="exampleEmail" placeholder="Kegiatan Tugas Tambahan" type="number" class="form-control" value="" required></div>          
                                            </div> 
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" required>
                                                                            <option value="" disabled selected>-Pilih Kategori-</option>
                                                                            <option value="kegiatan_tugas_tambahan">Kegiatan Tugas Tambahan</option>
                                                                            <option value="tugas_tambahan">Tugas Tambahan</option>
                                                                            <option value="kreativitas">Kreativitas</option>
                                                                        </select></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>AK Target</b></label>
                                                <div class="col-sm-10"><input name="ak_target" id="exampleEmail" placeholder="AK Target" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="target_kuant_output_1" id="exampleEmail" placeholder="Target Kuant Output 1" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="target_kuant_output_2" id="exampleEmail" placeholder="Target Kuant Output 2" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="target_kual_mutu" id="exampleEmail" placeholder="Target Kual Mutu" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Biaya</b></label>
                                                <div class="col-sm-10"><input name="target_biaya" id="exampleEmail" placeholder="Target Biaya" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>AK Realisasi</b></label>
                                                <div class="col-sm-10"><input name="ak_realisasi" id="exampleEmail" placeholder="AK Realisasi" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisasi Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kuant_output_1" id="exampleEmail" placeholder="Realisasi Kuant Output 1" type="number" class="form-control" value="" required></div>          
                                            </div>  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisasi Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kuant_output_2" id="exampleEmail" placeholder="Realisasi Kuant Output 2" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Relisasi Kuant Mutu</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kual_mutu" id="exampleEmail" placeholder="Relisasi Kuant Mutu" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisai Biaya</b></label>
                                                <div class="col-sm-10"><input name="realisasi_biaya" id="exampleEmail" placeholder="Realisai Biaya" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Perhitungan</b></label>
                                                <div class="col-sm-10"><input name="penghitungan" id="exampleEmail" placeholder="Perhitungan" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nilai Capaian SKP</b></label>
                                                <div class="col-sm-10"><input name="nilai_capaian_skp" id="exampleEmail" placeholder="Nilai Capaian SKP" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Target</b></label>
                                                <div class="col-sm-10"><input name="total_ak_target" id="exampleEmail" placeholder="Total AK Target" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="total_target_kuant_output_1" id="exampleEmail" placeholder="Total Target Kuant Output 1" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="total_target_kuant_output_2" id="exampleEmail" placeholder="Total Target Kuant Output 2" type="number" class="form-control" value="" required></div>          
                                            </div>                  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="total_target_kual_mutu" id="exampleEmail" placeholder="Total Target Kual Mutu" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Biaya</b></label>
                                                <div class="col-sm-10"><input name="total_target_biaya" id="exampleEmail" placeholder="Total Target Biaya" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Realisasi</b></label>
                                                <div class="col-sm-10"><input name="total_ak_realisasi" id="exampleEmail" placeholder="Total AK Realisasi" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kuant_output_1" id="exampleEmail" placeholder="Total Realisasi Kuant Output 1" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kuant_output_2" id="exampleEmail" placeholder="Total Realisasi Kuant Output 2" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kual_mutu" id="exampleEmail" placeholder="Total Realisasi Kual Mutu" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Biaya</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_biaya" id="exampleEmail" placeholder="Total Realisasi Biaya" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Penghitungan</b></label>
                                                <div class="col-sm-10"><input name="total_penghitungan" id="exampleEmail" placeholder="Total Penghitungan" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 1</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_1" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 1" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 2</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_2" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 2" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 3</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_3" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 3" type="number" class="form-control" value="" required></div>          
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



@foreach($pengukuran_skp as $pengukuran_skps)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$pengukuran_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Pengukuran SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="pengukuran_skp/update/{{$pengukuran_skps->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kegiatan Tugas Tambahan</b></label>
                                                <div class="col-sm-10"><input name="kegiatan_tugas_tambahan" id="exampleEmail" placeholder="Kegiatan Tugas Tambahan" type="number" class="form-control" value="{{$pengukuran_skps->kegiatan_tugas_tambahan}}" required></div>          
                                            </div> 
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" required>
                                                                            @if($pengukuran_skps->kategori == "kegitan_tugas_tambah")
                                                                            <option value="kegiatan_tugas_tambahan" selected>Kegiatan Tugas Tambahan</option>
                                                                            <option value="tugas_tambahan">Tugas Tambahan</option>
                                                                            <option value="kreativitas">Kreativitas</option>
                                                                            @elseif($pengukuran_skps->kategori == "tugas_tambahan")
                                                                            <option value="kegiatan_tugas_tambahan">Kegiatan Tugas Tambahan</option>
                                                                            <option value="tugas_tambahan" selected>Tugas Tambahan</option>
                                                                            <option value="kreativitas">Kreativitas</option>
                                                                            @elseif($pengukuran_skps->kategori == "tugas_tambahan")
                                                                            <option value="kegiatan_tugas_tambahan">Kegiatan Tugas Tambahan</option>
                                                                            <option value="tugas_tambahan">Tugas Tambahan</option>
                                                                            <option value="kreativitas" selected>Kreativitas</option>
                                                                            @endif
                                                                        </select></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>AK Target</b></label>
                                                <div class="col-sm-10"><input name="ak_target" id="exampleEmail" placeholder="AK Target" type="number" class="form-control" value="{{$pengukuran_skps->ak_target}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="target_kuant_output_1" id="exampleEmail" placeholder="Target Kuant Output 1" type="number" class="form-control" value="{{$pengukuran_skps->target_kuant_output_1}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="target_kuant_output_2" id="exampleEmail" placeholder="Target Kuant Output 2" type="number" class="form-control" value="{{$pengukuran_skps->target_kuant_output_2}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="target_kual_mutu" id="exampleEmail" placeholder="Target Kual Mutu" type="number" class="form-control" value="{{$pengukuran_skps->target_kual_mutu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Biaya</b></label>
                                                <div class="col-sm-10"><input name="target_biaya" id="exampleEmail" placeholder="Target Biaya" type="number" class="form-control" value="{{$pengukuran_skps->target_biaya}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>AK Realisasi</b></label>
                                                <div class="col-sm-10"><input name="ak_realisasi" id="exampleEmail" placeholder="AK Realisasi" type="number" class="form-control" value="{{$pengukuran_skps->ak_realisasi}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisasi Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kuant_output_1" id="exampleEmail" placeholder="Realisasi Kuant Output 1" type="number" class="form-control" value="{{$pengukuran_skps->realisasi_kuant_output_1}}" required></div>          
                                            </div>  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisasi Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kuant_output_2" id="exampleEmail" placeholder="Realisasi Kuant Output 2" type="number" class="form-control" value="{{$pengukuran_skps->realisasi_kuant_output_2}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Relisasi Kuant Mutu</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kual_mutu" id="exampleEmail" placeholder="Relisasi Kuant Mutu" type="number" class="form-control" value="{{$pengukuran_skps->realisasi_kual_mutu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisai Biaya</b></label>
                                                <div class="col-sm-10"><input name="realisasi_biaya" id="exampleEmail" placeholder="Realisai Biaya" type="number" class="form-control" value="{{$pengukuran_skps->realisasi_biaya}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Perhitungan</b></label>
                                                <div class="col-sm-10"><input name="penghitungan" id="exampleEmail" placeholder="Perhitungan" type="number" class="form-control" value="{{$pengukuran_skps->penghitungan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nilai Capaian SKP</b></label>
                                                <div class="col-sm-10"><input name="nilai_capaian_skp" id="exampleEmail" placeholder="Nilai Capaian SKP" type="number" class="form-control" value="{{$pengukuran_skps->nilai_capaian_skp}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Target</b></label>
                                                <div class="col-sm-10"><input name="total_ak_target" id="exampleEmail" placeholder="Total AK Target" type="number" class="form-control" value="{{$pengukuran_skps->total_ak_target}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="total_target_kuant_output_1" id="exampleEmail" placeholder="Total Target Kuant Output 1" type="number" class="form-control" value="{{$pengukuran_skps->total_target_kuant_output_1}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="total_target_kuant_output_2" id="exampleEmail" placeholder="Total Target Kuant Output 2" type="number" class="form-control" value="{{$pengukuran_skps->total_target_kuant_output_2}}" required></div>          
                                            </div>                  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="total_target_kual_mutu" id="exampleEmail" placeholder="Total Target Kual Mutu" type="number" class="form-control" value="{{$pengukuran_skps->total_target_kual_mutu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Biaya</b></label>
                                                <div class="col-sm-10"><input name="total_target_biaya" id="exampleEmail" placeholder="Total Target Biaya" type="number" class="form-control" value="{{$pengukuran_skps->total_target_biaya}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Realisasi</b></label>
                                                <div class="col-sm-10"><input name="total_ak_realisasi" id="exampleEmail" placeholder="Total AK Realisasi" type="number" class="form-control" value="{{$pengukuran_skps->total_ak_realisasi}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kuant_output_1" id="exampleEmail" placeholder="Total Realisasi Kuant Output 1" type="number" class="form-control" value="{{$pengukuran_skps->total_realisasi_kuant_output_1}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kuant_output_2" id="exampleEmail" placeholder="Total Realisasi Kuant Output 2" type="number" class="form-control" value="{{$pengukuran_skps->total_realisasi_kuant_output_2}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kual_mutu" id="exampleEmail" placeholder="Total Realisasi Kual Mutu" type="number" class="form-control" value="{{$pengukuran_skps->total_realisasi_kual_mutu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Biaya</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_biaya" id="exampleEmail" placeholder="Total Realisasi Biaya" type="number" class="form-control" value="{{$pengukuran_skps->total_realisasi_biaya}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Penghitungan</b></label>
                                                <div class="col-sm-10"><input name="total_penghitungan" id="exampleEmail" placeholder="Total Penghitungan" type="number" class="form-control" value="{{$pengukuran_skps->total_penghitungan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 1</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_1" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 1" type="number" class="form-control" value="{{$pengukuran_skps->total_nilai_capaian_skp_1}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 2</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_2" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 2" type="number" class="form-control" value="{{$pengukuran_skps->total_nilai_capaian_skp_2}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 3</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_3" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 3" type="number" class="form-control" value="{{$pengukuran_skps->total_nilai_capaian_skp_3}}" required></div>          
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


@foreach($pengukuran_skp as $pengukuran_skps)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$pengukuran_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Pengukuran SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="pengukuran_skp/delete/{{$pengukuran_skps->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Pengukuran SKP" <b></b> </p></center></p>
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



