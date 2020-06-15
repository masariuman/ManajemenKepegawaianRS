@extends('admin.template')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/fh-3.1.7/r-2.2.5/sp-1.1.1/sl-1.3.1/datatables.min.css"/>
    <style>
        .width100{
            width: 100%;
        }
        .width100px{
            width: 100px;
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
        .margintop50 {
            margin-top: 50px;
        }
        .sidetable{
            background-image: url(/lojin/sidebarx.png);
            background-repeat: no-repeat;
            width: 500px;
            height: 41px;
            color: #ffffff;
        }
        .titlepertab {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 40px;
            letter-spacing: 0px;
            word-spacing: 0px;
            color: #000000;
            font-weight: 700;
            text-decoration: none solid rgb(68, 68, 68);
            font-style: normal;
            font-variant: small-caps;
            text-transform: capitalize;
            margin-top: 40px;
            margin-bottom: 40px;
        }
    </style>
@endpush

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        @if ($pegawai->jenis_kelamin === 'W')
                            <i class="pe-7s-user-female icon-gradient bg-happy-fisher"></i>
                        @else
                            <i class="pe-7s-user icon-gradient bg-happy-fisher"></i>
                        @endif
                    </div>
                    <div>{{$pegawai->user->name}}
                        <div class="page-title-subheading">Data {{$pegawai->user->name}}
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
                        <div class="text-center">
                            @include('admin.pegawai.show_partial.button')
                        </div>
                        <hr />
                        {{-- Dasar --}}
                        @include('admin.pegawai.show_partial.dasar')
                        @include('admin.pegawai.show_partial.riwayat_pendidikan_formal')
                        @include('admin.pegawai.show_partial.riwayat_diklat_fungsional')
                        @include('admin.pegawai.show_partial.riwayat_diklat_teknis')
                        @include('admin.pegawai.show_partial.riwayat_diklat_penjenjangan')
                        @include('admin.pegawai.show_partial.riwayat_kepangkatan')
                        @include('admin.pegawai.show_partial.riwayat_jabatan_struktural')
                        @include('admin.pegawai.show_partial.riwayat_jabatan_fungsional')
                        @include('admin.pegawai.show_partial.riwayat_pekerjaan')
                        @include('admin.pegawai.show_partial.pasangan')
                        @include('admin.pegawai.show_partial.seminar')
                        @include('admin.pegawai.show_partial.jasa')
                        @include('admin.pegawai.show_partial.hukum')
                        @include('admin.pegawai.show_partial.organisasi')
                        @include('admin.pegawai.show_partial.keluarga')
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
    <script type="text/javascript" src="/taxi/assets/scripts/main.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/fh-3.1.7/r-2.2.5/sp-1.1.1/sl-1.3.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable_riwayat_pendidikan_formal, #datatable_riwayat_diklat_fungsional, #datatable_riwayat_diklat_fungsional, #datatable_riwayat_diklat_teknis, #datatable_riwayat_diklat_penjenjangan, #datatable_riwayat_kepangkatan, #datatable_riwayat_jabatan_struktural, #datatable_riwayat_jabatan_fungsional, #datatable_riwayat_pekerjaan, #datatable_suami, #datatable_istri, #datatable_anak, #datatable_seminar, #datatable_jasa, #datatable_hukum, #datatable_organisasi, #datatable_keluarga_kandung, #datatable_keluarga_suami, #datatable_keluarga_istri').DataTable({
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
    <script>
        $(document).ready(function(){
            $("#dasarB").click(function(){
                $("#dasar").show();
                $('#dasarB').addClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#riwayat_pendidikan_formalB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").show();
                $('#riwayat_pendidikan_formalB').addClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#riwayat_diklat_fungsionalB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").show();
                $('#riwayat_diklat_fungsionalB').addClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#riwayat_diklat_teknisB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").show();
                $('#riwayat_diklat_teknisB').addClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#riwayat_diklat_penjenjanganB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").show();
                $('#riwayat_diklat_penjenjanganB').addClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#riwayat_kepangkatanB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").show();
                $('#riwayat_kepangkatanB').addClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#riwayat_jabatan_strukturalB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").show();
                $('#riwayat_jabatan_strukturalB').addClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#riwayat_jabatan_fungsionalB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").show();
                $('#riwayat_jabatan_fungsionalB').addClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#riwayat_pekerjaanB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").show();
                $('#riwayat_pekerjaanB').addClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#pasanganB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").show();
                $('#pasanganB').addClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#anakB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").show();
                $('#anakB').addClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#seminarB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").show();
                $('#seminarB').addClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#jasaB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").show();
                $('#jasaB').addClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#hukumB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").show();
                $('#hukumB').addClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#organisasiB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").show();
                $('#organisasiB').addClass('active');
                $("#keluarga").hide();
                $('#keluargaB').removeClass('active');
            });
            $("#keluargaB").click(function(){
                $("#dasar").hide();
                $('#dasarB').removeClass('active');
                $("#riwayat_pendidikan_formal").hide();
                $('#riwayat_pendidikan_formalB').removeClass('active');
                $("#riwayat_diklat_fungsional").hide();
                $('#riwayat_diklat_fungsionalB').removeClass('active');
                $("#riwayat_diklat_teknis").hide();
                $('#riwayat_diklat_teknisB').removeClass('active');
                $("#riwayat_diklat_penjenjangan").hide();
                $('#riwayat_diklat_penjenjanganB').removeClass('active');
                $("#riwayat_kepangkatan").hide();
                $('#riwayat_kepangkatanB').removeClass('active');
                $("#riwayat_jabatan_struktural").hide();
                $('#riwayat_jabatan_strukturalB').removeClass('active');
                $("#riwayat_jabatan_fungsional").hide();
                $('#riwayat_jabatan_fungsionalB').removeClass('active');
                $("#riwayat_pekerjaan").hide();
                $('#riwayat_pekerjaanB').removeClass('active');
                $("#pasangan").hide();
                $('#pasanganB').removeClass('active');
                $("#anak").hide();
                $('#anakB').removeClass('active');
                $("#seminar").hide();
                $('#seminarB').removeClass('active');
                $("#jasa").hide();
                $('#jasaB').removeClass('active');
                $("#hukum").hide();
                $('#hukumB').removeClass('active');
                $("#organisasi").hide();
                $('#organisasiB').removeClass('active');
                $("#keluarga").show();
                $('#keluargaB').addClass('active');
            });
        });
    </script>
@endpush
