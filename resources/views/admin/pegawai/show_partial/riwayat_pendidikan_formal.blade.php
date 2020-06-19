<div id="riwayat_pendidikan_formal" style="display: none;">
    <div class="text-center titlepertab">data riwayat pendidikan formal</div>
    <div class="margintop20">
        <table class="mb-0 table table-striped table-bordered" id="datatable_riwayat_pendidikan_formal">
            <thead>
            <tr>
                <th class="width40 text-center">No</th>
                <th class="width200 text-center">Tingkat Pendidikan</th>
                <th class="text-center">Nama Sekolah</th>
                <th class="width100px text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($pendidikan_formal as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->tingkat_pendidikan}}</td>
                        <td class="text-center">{{$item->nama_sekolah}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#riwayat_pendidikan_formal_show_{{$item->id}}"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
