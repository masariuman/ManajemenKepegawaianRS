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
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info active" id="dasarB">Dasar</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_pendidikan_formalB">Riwayat Pendidikan Formal</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_diklat_fungsionalB">Riwayat Diktal Fungsional</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_diklat_teknisB">Riwayat Diklat Teknis</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_diklat_penjenjanganB">Riwayat Diklat Penjenjangan</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_kepangkatanB">Riwayat Kepangkatan</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_jabatan_strukturalB">Riwayat Jabatan Struktural</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_jabatan_fungsionalB">Riwayat Jabatan Fungsional</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_pekerjaanB">Riwayat Pekerjaan/Jabatan Teknis</button>
                            @if ($pegawai->jenis_kelamin === 'W')
                                <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="pasanganB">Suami</button>
                            @else
                                <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="pasanganB">Istri</button>
                            @endif
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="anakB">Anak</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="seminarB">Seminar/Lokakarya/Simposium</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="jasaB">Tanda Jasa/Penghargaan</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="hukumB">Hukuman Disiplin</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="organisasiB">Keanggotaan Organisasi</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="keluargaB">Keluarga</button>
                        </div>
                        <hr />
                        {{-- Dasar --}}
                        <div id="dasar">
                            dasar
                        </div>
                        <div id="riwayat_pendidikan_formal" style="display: none;">
                            Riwayat Pendidikan Formal
                        </div>
                        <div id="riwayat_diklat_fungsional" style="display: none;">
                            Riwayat diklat fungsional
                        </div>
                        <div id="riwayat_diklat_teknis" style="display: none;">
                            Riwayat diklat teknis
                        </div>
                        <div id="riwayat_diklat_penjenjangan" style="display: none;">
                            Riwayat diklat penjenangan
                        </div>
                        <div id="riwayat_kepangkatan" style="display: none;">
                            Riwayat kepangkatan
                        </div>
                        <div id="riwayat_jabatan_struktural" style="display: none;">
                            Riwayat jabatan struktural
                        </div>
                        <div id="riwayat_jabatan_fungsional" style="display: none;">
                            Riwayat jabatan fungsional
                        </div>
                        <div id="riwayat_pekerjaan" style="display: none;">
                            Riwayat pekerjaan
                        </div>
                        <div id="pasangan" style="display: none;">
                            @if ($pegawai->jenis_kelamin === 'W')
                                Suami
                            @else
                                Istri
                            @endif
                        </div>
                        <div id="anak" style="display: none;">
                            anak
                        </div>
                        <div id="seminar" style="display: none;">
                            seminar
                        </div>
                        <div id="jasa" style="display: none;">
                            jasa
                        </div>
                        <div id="hukum" style="display: none;">
                            hukum
                        </div>
                        <div id="organisasi" style="display: none;">
                            organisasi
                        </div>
                        <div id="keluarga" style="display: none;">
                            keluarga
                        </div>
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
