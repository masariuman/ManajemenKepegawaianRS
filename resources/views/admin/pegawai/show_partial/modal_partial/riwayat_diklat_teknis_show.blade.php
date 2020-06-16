@foreach ($diklat_teknis as $no => $item)
    <div class="modal fade bd-example-modal-lg" id="riwayat_diklat_teknis_show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Data Riwayat Diklat Teknis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="mb-0 table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" class="sidetable">NAMA DIKLAT/KURSUS</th>
                                <td>{{$item->nama_diklat}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TEMPAT BELAJAR</th>
                                <td>{{$item->tempat_belajar}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">LOKASI</th>
                                <td>{{$item->lokasi}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TANGGAL MULAI</th>
                                <td>{{$item->tanggal_mulai}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TANGGAL SELESAI</th>
                                <td>{{$item->tanggal_selesai}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">JUMLAH JAM</th>
                                <td>{{$item->jumlah_jam}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">PENYELENGGARA</th>
                                <td>{{$item->penyelenggara}}</td>
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

