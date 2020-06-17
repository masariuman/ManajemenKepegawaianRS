@foreach ($istri_suami as $no => $item)
    <div class="modal fade bd-example-modal-lg" id="suami_show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Data Suami</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="mb-0 table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" class="sidetable">NAMA SUAMI</th>
                                <td>{{$item->nama}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">NOMOR KARSU (KARTU SUAMI)</th>
                                <td>{{$item->nomor_karis_karsu}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TANGGAL LAHIR</th>
                                <td>{{$item->tanggal_lahir}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TANGGAL NIKAH</th>
                                <td>{{$item->tanggal_nikah}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TINGKAT PENDIDIKAN</th>
                                <td>{{$item->tingkat_pendidikan}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">PEKERJAAN</th>
                                <td>{{$item->pekerjaan}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">STATUS SUAMI</th>
                                <td>{{$item->status_suami_istri}}</td>
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
