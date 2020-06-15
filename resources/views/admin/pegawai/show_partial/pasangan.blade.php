<div id="pasangan" style="display: none;">
    @if ($pegawai->jenis_kelamin === 'W')
        <div class="text-center titlepertab">Data suami</div>
        <div class="margintop20">
            <table class="mb-0 table table-striped table-bordered" id="datatable_suami">
                <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nomor Karsu (Kartu Suami)</th>
                    <th class="text-center">Nama Suami</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                        <tr>
                            <th class="text-center">1</th>
                            <td class="text-center">241453432525352532</td>
                            <td class="text-center">Suami Setia</td>
                            <td class="text-center">
                                <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#suami_show"><i class="fa fa-eye"></i></button>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center titlepertab">Data istri</div>
        <div class="margintop20">
            <table class="mb-0 table table-striped table-bordered" id="datatable_istri">
                <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nomor Karis (Kartu Istri)</th>
                    <th class="text-center">Nama Istri</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                        <tr>
                            <th class="text-center">1</th>
                            <td class="text-center">sadeefew3efewfdfwefefe</td>
                            <td class="text-center">Istri Setia Solehah</td>
                            <td class="text-center">
                                <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#istri_show"><i class="fa fa-eye"></i></button>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>
