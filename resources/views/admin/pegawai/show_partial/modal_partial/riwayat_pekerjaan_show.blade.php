@foreach ($pekerjaan_jabatan as $no => $item)
    <div class="modal fade bd-example-modal-lg" id="riwayat_pekerjaan_show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Data Riwayat Pekerjaan/Jabatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="mb-0 table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" class="sidetable">NAMA JABATAN</th>
                                <td>{{$item->}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TMT JABATAN</th>
                                <td>{{$item->}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TAHUN MULAI</th>
                                <td>{{$item->}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">SAMPAI DENGAN</th>
                                <td>{{$item->}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">NOMOR SK</th>
                                <td>{{$item->}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TANGGAL SK</th>
                                <td>{{$item->}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">NIP PEJABAT PENANDATANGAN SK</th>
                                <td>{{$item->}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">NIP LAMA PEJABAT PENANDATANGAN SK</th>
                                <td>{{$item->}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">PEJABAT PENANDATANGAN SK</th>
                                <td>{{$item->}}</td>
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
