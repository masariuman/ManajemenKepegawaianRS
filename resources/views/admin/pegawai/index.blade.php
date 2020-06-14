@extends('admin.template')

@push('css')
    <style>
        .width100{
            width: 100%;
        }
        .width40{
            width: 40px;
        }
        .width200{
            width: 200px;
        }
    </style>
@endpush

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-users icon-gradient bg-happy-fisher">
                        </i>
                    </div>
                    <div>Pegawai
                        <div class="page-title-subheading">Data Pegawai
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">

                </div>
            </div>
        </div>
        @include('pesan')
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade" id="tab-content-0" role="tabpanel">
            </div>
            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <button class="mb-2 mr-2 btn-transition btn btn-outline-primary width100" data-toggle="modal" data-target="#exampleModalLargeTambah">Tambah Akun Pegawai Baru</button>
                        <table class="mb-0 table table-striped">
                            <thead>
                                <tr>
                                    <th class="width40 text-center">No</th>
                                    <th class="width200 text-center">NIP</th>
                                    <th class="text-center">Nama</th>
                                    <th class="width200 text-center">Jabatan</th>
                                    <th class="width200 text-center">Ruangan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawai as $no => $item)
                                    <tr>
                                        <th class="text-center">{{$no+1}}</th>
                                        <td class="text-center">{{$item->nip_baru}}</td>
                                        <td>{{$item->user->name}}</td>
                                        <td>{{$item->nama_jabatan}}</td>
                                        <td>{{$item->ruangan->ruangan}}</td>
                                        @if(auth()->user()->level == 'ADMIN')
                                            <td class="text-center"><a href="/it/pegawai/{{$item->id}}"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info"><i class="pe-7s-info "></i></button></a></td>
                                        @else
                                            <td class="text-center"><a href="/admin/pegawai/{{$item->id}}"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info"><i class="pe-7s-info "></i></button></a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('modal')
    <!-- Modal Tambah -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalLargeTambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Akun Pegawai Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if(auth()->user()->level == 'ADMIN')
                        <form class="" action="/it/pegawai" method="post">
                    @else
                        <form class="" action="/admin/pegawai" method="post">
                    @endif
                        @csrf
                        <div class="position-relative form-group"><label for="exampleAddress" class="">Gelar Depan</label><input name="gelar_depan" id="exampleAddress" placeholder="Isi disini.." type="text" class="form-control"></div>
                        <div class="position-relative form-group"><label for="exampleAddress" class="">Nama</label><input name="nama" id="exampleAddress" placeholder="Isi disini.." type="text" class="form-control"></div>
                        <div class="position-relative form-group"><label for="exampleAddress" class="">Gelar Belakang</label><input name="gelar_belakang" id="exampleAddress" placeholder="Isi disini.." type="text" class="form-control"></div>
                        <div class="position-relative form-group"><label for="exampleAddress" class="">Tanggal Lahir</label><input name="tanggal_lahir" id="datepicker" placeholder="Isi disini.." type="date" class="form-control"></div>
                        <div class="position-relative form-group"><label for="exampleAddress" class="">Email</label><input name="email" id="exampleAddress" placeholder="Isi Disini.." type="email" class="form-control"></div>
                        <div class="position-relative form-group">
                            <label for="exampleAddress" class="">Ruangan</label>
                            <select class="mb-2 form-control" name="ruangan">
                                <option selected disabled>Pilih Data...</option>
                                @foreach ($ruangan as $data)
                                    <option value="{{$data->id}}">{{$data->ruangan}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                    <button type="submit" class="btn btn-light"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Tambah -->
@endpush

@push('js')
    <script type="text/javascript" src="/taxi/assets/scripts/main.js"></script>
@endpush
