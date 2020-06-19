@foreach ($organisasi as $no => $item)
    <div class="modal fade bd-example-modal-lg" id="organisasi_show_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Data Keanggotaan Organisasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="mb-0 table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" class="sidetable">TAHUN</th>
                                <td>{{$item->tahun_organisasi}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">NAMA ORGANISASI</th>
                                <td>{{$item->nama_organisasi}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">KEDUDUKAN DALAM ORGANISASI</th>
                                <td>{{$item->kedudukan}}</td>
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
                                <th scope="row" class="sidetable">NOMOR SK</th>
                                <td>{{$item->nomor_sk}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">PEJABAT PEMBUAT SK</th>
                                <td>{{$item->jabatan_pembuat_sk}}</td>
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
