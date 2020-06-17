@foreach ($penghargaan as $no => $item)
    <div class="modal fade bd-example-modal-lg" id="jasa_show_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Data Tanda Jasa/Penghargaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="mb-0 table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" class="sidetable">NAMA TANDA JASA/PENGHARGAAN</th>
                                <td>{{$item->nama_penghargaan}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TANGGAL PEROLEHAN</th>
                                <td>{{$item->tanggal_perolehan}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">NOMOR</th>
                                <td>{{$item->nomor}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">NEGARA/INSTANSI PEMBERI</th>
                                <td>{{$item->pemberi}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">JABATAN PEMBERI</th>
                                <td>{{$item->jabatan_pemberi}}</td>
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
