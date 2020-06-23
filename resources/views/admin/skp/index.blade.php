@extends('admin.template')

@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/fh-3.1.7/r-2.2.5/sp-1.1.1/sl-1.3.1/datatables.min.css"/>
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
        .margintop20 {
            margin-top: 20px;
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
                        <div class="margintop20">
                            <table class="mb-0 table table-striped" id="table">
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
                                    @foreach ($pegawai as $no => $item)
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/fh-3.1.7/r-2.2.5/sp-1.1.1/sl-1.3.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                "language": {
                    "search" : "Cari Data: ",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "emptyTable": "Data Tidak Ada",
                    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                    "infoFiltered": "(Dicari dari _MAX_ total data)",
                    "lengthMenu": "Menampilkan _MENU_ Data",
                    "zeroRecords": "Data yang dicari tidak ada",
                    "paginate": {
                        "first":      "Pertama",
                        "last":       "Terakhir",
                        "next":       "Berikutnya",
                        "previous":   "Sebelumnya"
                    }
                }
            });
        } );
    </script>
@endpush
