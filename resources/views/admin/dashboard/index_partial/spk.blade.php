<div id="spk" style="display: none;">
    <div class="text-center titlepertab">Data SPK Pegawai Yang Akan Habis</div>
    <div class="margintop20">
        <table class="mb-0 table table-striped table-bordered" id="datatable_anak">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="width200 text-center">NIP</th>
                    <th class="text-center">Nama</th>
                    <th class="width200 text-center">Jabatan</th>
                    <th class="width100px text-center">Ruangan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spk as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nip_baru}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->nama_jabatan}}</td>
                        <td class="text-center">{{$item->ruangan->ruangan}}</td>
                        @if(auth()->user()->level == 'ADMIN')
                            <td class="text-center"><a href="/it/pegawai/{{$item->id}}"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info"><i class="fa fa-eye"></i></button></a></td>
                        @else
                            <td class="text-center"><a href="/admin/pegawai/{{$item->id}}"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info"><i class="fa fa-eye"></i></button></a></td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
