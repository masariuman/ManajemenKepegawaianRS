<div id="anak" style="display: none;">
    <div class="text-center titlepertab">Data anak</div>
    <div class="margintop20">
        <table class="mb-0 table table-striped table-bordered" id="datatable_anak">
            <thead>
            <tr>
                <th class="width40 text-center">No</th>
                <th class="text-center">Nama Anak</th>
                <th class="text-center">Status Anak</th>
                <th class="width100px text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($anak as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama}}</td>
                        <td class="text-center">{{$item->status_anak}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#anak_show"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
