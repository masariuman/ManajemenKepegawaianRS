<div id="keluarga" style="display: none;">
    <div class="text-center titlepertab">Data keluarga kandung</div>
    <div class="margintop20">
        <table class="mb-0 table table-striped table-bordered" id="datatable_keluarga_kandung">
            <thead>
            <tr>
                <th class="width40 text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Hubungan</th>
                <th class="text-center">Pekerjaan</th>
                <th class="width100px text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($keluarga_kandung as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama}}</td>
                        <td class="text-center">{{$item->hubungan}}</td>
                        <td class="text-center">{{$item->pekerjaan}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#keluarga_kandung_show"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr class="margintop50" />
    @if ($pegawai->jenis_kelamin === 'W')
        <div class="text-center titlepertab">Data Keluarga Suami</div>
        <div class="margintop20">
            <table class="mb-0 table table-striped table-bordered" id="datatable_keluarga_suami">
                <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Hubungan</th>
                    <th class="text-center">Pekerjaan</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($keluarga_istri_suami as $no => $item)
                        <tr>
                            <th class="text-center">{{$no+1}}</th>
                            <td class="text-center">{{$item->nama}}</td>
                            <td class="text-center">{{$item->hubungan}}</td>
                            <td class="text-center">{{$item->pekerjaan}}</td>
                            <td class="text-center">
                                <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#keluarga_suami_show"><i class="fa fa-eye"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center titlepertab">Data keluarga istri</div>
        <div class="margintop20">
            <table class="mb-0 table table-striped table-bordered" id="datatable_keluarga_istri">
                <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Hubungan</th>
                    <th class="text-center">Pekerjaan</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($keluarga_istri_suami as $no => $item)
                        <tr>
                            <th class="text-center">{{$no+1}}</th>
                            <td class="text-center">{{$item->nama}}</td>
                            <td class="text-center">{{$item->hubungan}}</td>
                            <td class="text-center">{{$item->pekerjaan}}</td>
                            <td class="text-center">
                                <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#keluarga_istri_show"><i class="fa fa-eye"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
