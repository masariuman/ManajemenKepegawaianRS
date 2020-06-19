@foreach ($diklat_penjenjangan as $no => $item)
    <div class="modal fade bd-example-modal-lg" id="riwayat_diklat_penjenjangan_show_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Data Riwayat Diklat Penjenjangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="mb-0 table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" class="sidetable">JENIS DIKLAT</th>
                                <td>{{$item->jenis_diklat}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">ANGKATAN</th>
                                <td>{{$item->angkatan}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">PENYELENGGARA</th>
                                <td>{{$item->penyelenggara}}</td>
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
                                <th scope="row" class="sidetable">PREDIKAT</th>
                                <td>{{$item->predikat}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">LOKASI</th>
                                <td>{{$item->lokasi}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">JUMLAH JAM</th>
                                <td>{{$item->jumlah_jam}}</td>
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
