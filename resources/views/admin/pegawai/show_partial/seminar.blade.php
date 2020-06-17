<div id="seminar" style="display: none;">
    <div class="text-center titlepertab">Data seminar/lokakarya/simposium</div>
    <div class="margintop20">
        <table class="mb-0 table table-striped table-bordered" id="datatable_seminar">
            <thead>
            <tr>
                <th class="width40 text-center">No</th>
                <th class="text-center">Nama Kegiatan</th>
                <th class="text-center">Lokasi Kegiatan</th>
                <th class="width100px text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($seminar as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama_kegiatan}}</td>
                        <td class="text-center">{{$item->lokasi}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#seminar_show_{{$item->id}}"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
