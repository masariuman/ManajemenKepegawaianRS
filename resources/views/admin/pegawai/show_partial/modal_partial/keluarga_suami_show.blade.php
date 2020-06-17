@foreach ($keluarga_istri_suami as $no => $item)
    <div class="modal fade bd-example-modal-lg" id="keluarga_suami_show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Data Keluarga Suami</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="mb-0 table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" class="sidetable">NAMA</th>
                                <td>{{$item->nama}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">HUBUNGAN</th>
                                <td>{{$item->hubungan}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">PEKERJAAN</th>
                                <td>{{$item->pekerjaan}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TANGGAL LAHIR</th>
                                <td>{{$item->tanggal_lahir}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">JENIS KELAMIN</th>
                                <td>{{$item->jenis_kelamin}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">KONDISI</th>
                                <td>{{$item->kondisi}}</td>
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
