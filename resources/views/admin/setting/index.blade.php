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
                        @if(auth()->user()->level == 'ADMIN')
                            <form class="" action="/it/setting/{{$setting->id}}" method="post">
                        @else
                            <form class="" action="/admin/setting/{{$setting->id}}" method="post">
                        @endif
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="position-relative form-group">
                                <label for="exampleAddress" class="">Tahun</label>
                                <input name="tahun" id="exampleAddress" placeholder="Isi disini.." type="text" class="form-control" value="{{$setting->tahun}}" />
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleAddress" class="">Batas Pengisian SKP</label>
                                <input name="tanggal_skp" id="asd" placeholder="Isi disini.." type="date" class="form-control" value="{{$setting->terakhir_isi_skp}}" />
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleAddress" class="">Pesan Untuk Pengisian SKP</label>
                                <input name="pesan_skp" id="asd" placeholder="Isi disini.." type="text" class="form-control" value="{{$setting->pesan_skp}}" />
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleAddress" class="">Status Pengisian SKP : </label>
                                <button type="button" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-success active" id="buka">Dibuka</button>
                                <button type="button" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-dark" id="tutup">Tutup</button>
                                <input name="active_skp" id="active_skp" placeholder="Isi disini.." type="hidden" class="form-control" value="{{$setting->active_skp}}" />
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

@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#buka").click(function(){
                $("#active_skp").val('1');
                $('#buka').addClass('active');
                $('#tutup').removeClass('active');
            });
            $("#tutup").click(function(){
                $("#active_skp").val('0');
                $('#tutup').addClass('active');
                $('#buka').removeClass('active');
            });
            if($('#active_skp').val() === "1"){
                $("#active_skp").val('1');
                $('#buka').addClass('active');
                $('#tutup').removeClass('active');
            } else {
                $("#active_skp").val('0');
                $('#tutup').addClass('active');
                $('#buka').removeClass('active');
            }
            });
    </script>
@endpush
