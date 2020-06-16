@foreach ($pendidikan_formal as $no => $data)
    <div class="modal fade bd-example-modal-lg" id="riwayat_pendidikan_formal_show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Data Pendidikan Formal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="mb-0 table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" class="sidetable">TINGKAT PENDIDIKAN</th>
                                <td>{{$data->tingkat_pendidikan}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">NAMA SEKOLAH/UNIVERSITAS</th>
                                <td>{{$data->nama_sekolah}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">JURUSAN/PROGRAM STUDI</th>
                                <td>{{$data->jurusan_prodi}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TAHUN MASUK</th>
                                <td>{{$data->tahun_masuk}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TAHUN LULUS</th>
                                <td>{{$data->tahun_lulus}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TEMPAT BELAJAR</th>
                                <td>{{$data->tempat_belajar}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">LOKASI</th>
                                <td>{{$data->lokasi}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">NOMOR IJAZAH</th>
                                <td>{{$data->nomor_ijazah}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
