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
                        <i class="pe-7s-settings icon-gradient bg-happy-fisher">
                        </i>
                    </div>
                    <div>Setting
                        <div class="page-title-subheading">Setting | Pengaturan
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
                        <form class="" action="/it/setting/{{$setting->id}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="position-relative form-group">
                                <label for="exampleAddress" class="">Tahun</label>
                                <input name="tahun" id="exampleAddress" placeholder="Isi disini.." type="text" class="form-control" value="{{$setting->tahun}}" />
                            </div>
                            <button type="submit" class="mb-2 mr-2 btn-transition btn btn-outline-warning width100">Ubah</button>
                        </form>
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

@endpush
