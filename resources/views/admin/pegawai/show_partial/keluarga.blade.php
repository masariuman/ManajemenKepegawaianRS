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
                    <tr>
                        <th class="text-center">1</th>
                        <td class="text-center">si anu</td>
                        <td class="text-center">Moyang si anu</td>
                        <td class="text-center">tukang tukangan</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#keluarga_kandung_show"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
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
                        <tr>
                            <th class="text-center">1</th>
                            <td class="text-center">si bapak suami</td>
                            <td class="text-center">bapak e</td>
                            <td class="text-center">tukang apa saja</td>
                            <td class="text-center">
                                <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#riwayat_keluarga_suami"><i class="fa fa-eye"></i></button>
                            </td>
                        </tr>
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
                    <th class="text-center">Nama Diklat</th>
                    <th class="text-center">Lokasi</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                        <tr>
                            <th class="text-center">1</th>
                            <td class="text-center">latihan berjoget</td>
                            <td class="text-center">disana disini disitu</td>
                            <td class="text-center">
                                <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#riwayat_keluarga_istri"><i class="fa fa-eye"></i></button>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>
