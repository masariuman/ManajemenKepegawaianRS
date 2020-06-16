<div id="riwayat_jabatan_fungsional" style="display: none;">
    <div class="text-center titlepertab">Data riwayat jabatan fungsional</div>
    <div class="margintop20">
        <table class="mb-0 table table-striped table-bordered" id="datatable_riwayat_jabatan_fungsional">
            <thead>
            <tr>
                <th class="width40 text-center">No</th>
                <th class="text-center">Nomor SK</th>
                <th class="text-center">Nama Jabatan</th>
                <th class="width100px text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($jabatan_fungsional as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nomor_sk}}</td>
                        <td class="text-center">{{$item->nama_jabatan}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#riwayat_jabatan_fungsional_show"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
