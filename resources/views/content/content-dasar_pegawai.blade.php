<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-note2 icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Dasar Pegawai
                                        <div class="page-title-subheading">Isi data dasar pegawai anda disini.
                                        </div>
                                    </div>
                                </div>               
                                <div class="page-title-actions">
                                    <!-- <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>    </div>
                        </div>           
                         <!-- <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Layout</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Grid</span>
                                </a>
                            </li>
                        </ul> -->
                        @include('pesan')
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade" id="tab-content-0" role="tabpanel">
                                <!-- <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">E-Proposal</h5>
                                        <form class="" action="" method="post">
                                            @csrf   
                                            <div class="position-relative form-group"><label for="exampleAddress" class="">Judul Program</label><input name="judul_program" id="exampleAddress" placeholder="Isi disini.." type="text" class="form-control"></div>
                                            <div class="position-relative form-group"><label for="exampleAddress" class="">Latar Belakang</label><textarea name="latar_belakang" id="exampleAddress" placeholder="Isi disini.." type="text" class="form-control" rows="10"></textarea></div>
                                            <div class="position-relative form-group"><label for="exampleAddress" class="">Tujuan Program</label><textarea name="address" id="exampleAddress" placeholder="Isi disini.." type="text" class="form-control" rows="10"></textarea></div>
                                            <div class="position-relative form-group"><label for="exampleAddress" class="">Mekanisme Program</label><textarea name="address" id="exampleAddress" placeholder="Isi disini.." type="text" class="form-control" rows="10"></textarea></div>
                                            <div class="position-relative form-group"><label for="exampleAddress" class="">Periode Program</label><input name="address" id="datepicker" placeholder="Isi disini.." type="text" class="form-control"></div>
                                            <div class="position-relative form-group"><label for="exampleAddress" class="">Target Program</label><textarea name="address" id="exampleAddress" placeholder="Isi disini.." type="text" class="form-control" rows="10"></textarea></div>
                                            <div class="position-relative form-group"><label for="exampleAddress" class="">Biaya Program</label><input name="address" id="exampleAddress" placeholder="Isi disini.." type="number" class="form-control"></div>
                                            <button class="mt-2 btn btn-light"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Submit</button>
                                        </form>
                                    </div>
                                </div> -->
                                <!-- <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Inline</h5>
                                        <div>
                                            <form class="form-inline">
                                                <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group"><label for="exampleEmail22" class="mr-sm-2">Email</label><input name="email" id="exampleEmail22" placeholder="something@idk.cool" type="email"
                                                                                                                                                                               class="form-control"></div>
                                                <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group"><label for="examplePassword22" class="mr-sm-2">Password</label><input name="password" id="examplePassword22" placeholder="don't tell!" type="password"
                                                                                                                                                                                     class="form-control"></div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                            <div class="divider"></div>
                                            <form class="">
                                                <div class="position-relative form-check form-check-inline"><label class="form-check-label"><input type="checkbox" class="form-check-input"> Some input</label></div>
                                                <div class="position-relative form-check form-check-inline"><label class="form-check-label"><input type="checkbox" class="form-check-input"> Some other input</label></div>
                                            </form>
                                            <div class="divider"></div>
                                            <form class="form-inline">
                                                <div class="position-relative form-group"><label for="exampleEmail33" class="sr-only">Email</label><input name="email" id="exampleEmail33" placeholder="Email" type="email" class="mr-2 form-control"></div>
                                                <div class="position-relative form-group"><label for="examplePassword44" class="sr-only">Password</label><input name="password" id="examplePassword44" placeholder="Password" type="password"
                                                                                                                                                                class="mr-2 form-control"></div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                                <div class="main-card mb-3 card">
                                @if(empty($pegawai_id))
                                    <div class="card-body"><h5 class="card-title">Masukan Data Dasar Pegawai</h5>
                                @elseif(!empty($pegawai_id))
                                    <div class="card-body"><h5 class="card-title">Data Dasar Pegawai Anda</h5>
                                @endif   

                                    @if(empty($pegawai_id))
                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeTambah"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah
                                        </button>
                                    @endif         

                                        @foreach($pegawai as $key => $pegawais)
                                                @if(auth()->user()->id == $pegawais->user_id)
                                                <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$pegawais->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Ubah
                                                </button>
                                                <table class="mb-0 table table-striped">
        <tbody>
            <tr>
                <th scope="row" class="sidetable">ESELON I</th>
                <td><b>{{$pegawais->eselon_1}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">ESELON II</th>
                <td><b>{{$pegawais->eselon_2}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">ESELON III</th>
                <td><b>{{$pegawais->eselon_3}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">ESELON IV</th>
                <td><b>{{$pegawais->eselon_4}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NIP BARU</th>
                <td><b>{{$pegawais->nip_baru}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NIP LAMA</th>
                <td><b>{{$pegawais->nip_lama}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NAMA PEGAWAI</th>
                <td><b>{{$pegawais->nama_pegawai}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">GELAR DEPAN</th>
                <td><b>{{$pegawais->gelar_depan}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">GELAR BELAKANG</th>
                <td><b>{{$pegawais->gelar_belakang}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TEMPAT LAHIR</th>
                <td><b>{{$pegawais->tempat_lahir}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TANGGAL LAHIR</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->tanggal_lahir)) }}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">JENIS KELAMIN</th>
                <td><b>@if($pegawais->jenis_kelamin == "P")
                        Pria
                        @elseif($pegawais->jenis_kelamin == "W")
                        Wanita
                        @endif</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">STATUS KELUARGA</th>
                <td><b>@if($pegawais->status_keluarga == "K")
                        Nikah
                       @elseif($pegawais->status_keluarga == "B")
                        Belum Menikah
                       @elseif($pegawais->status_keluarga == "D")
                        Duda
                       @elseif($pegawais->status_keluarga == "J")
                          Janda
                       @endif</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">AGAMA</th>
                <td><b>@if($pegawais->agama == "1")
                        Islam
                        @elseif($pegawais->agama == "2")
                        Katholik                                     
                        @elseif($pegawais->agama == "3")
                        Protestan
                        @elseif($pegawais->agama == "4")
                        Hindu
                        @elseif($pegawais->agama == "5")
                        Budha 
                        @elseif($pegawais->agama == "6")
                        Kristen
                        @endif</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">PENDIDIKAN AKHIR</th>
                <td><b>@if($pegawais->pendidikan_akhir == "01")
                        S3 (Setara)
                        @elseif($pegawais->pendidikan_akhir == "02")
                        S2 (Setara)
                        @elseif($pegawais->pendidikan_akhir == "03")
                        S1 (Setara)
                        @elseif($pegawais->pendidikan_akhir == "04")
                        D4
                        @elseif($pegawais->pendidikan_akhir == "05")
                        SM
                        @elseif($pegawais->pendidikan_akhir == "06")
                        D3
                        @elseif($pegawais->pendidikan_akhir == "07")
                        D2
                        @elseif($pegawais->pendidikan_akhir == "08")
                        D1
                        @elseif($pegawais->pendidikan_akhir == "09")
                        SLTA
                        @elseif($pegawais->pendidikan_akhir == "10")
                        SLTP
                        @elseif($pegawais->pendidikan_akhir == "11")
                        SD
                        @endif</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NAMA SEKOLAH / TAHUN LULUS</th>
                <td><b>{{$pegawais->nama_sekolah}} / {{$pegawais->tahun_lulus}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">JURUSAN / PROGRAM STUDI</th>
                <td><b>{{$pegawais->jurusan_prodi}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">STATUS KEPEGAWAIAN</th>
                <td><b>@if($pegawais->status_kepegawaian == "01")
                       CPNS
                       @elseif($pegawais->status_kepegawaian == "02")
                       PNS
                       @elseif($pegawais->status_kepegawaian == "03")
                       PNS DPK DARI DEP.LAIN
                       @elseif($pegawais->status_kepegawaian == "04")
                       PNS DPK KE DEP.LAIN
                       @endif</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">INSTANSI ASAL</th>
                <td><b>{{$pegawais->instansi_asal}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TMT CALON PEGAWAI NEGERI SIPIL</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->tmt_cpns)) }}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">GOLONGAN / RUANG TERAKHIR</th>
                <td><b>{{$pegawais->golongan}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TMT GOLONGAN</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->tmt_golongan)) }}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NAMA JABATAN</th>
                <td><b>{{$pegawais->nama_jabatan}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR KARPEG</th>
                <td><b>{{$pegawais->nomor_karpeg}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TASPEN</th>
                <td><b>@if($pegawais->taspen == "1")
                                                Sudah
                                                @elseif($pegawais->taspen == "2")
                                                Belum
                                                @endif</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR NPWP</th>
                <td><b>{{$pegawais->nomor_npwp}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">ALAMAT RUMAH</th>
                <td><b>{{$pegawais->alamat_rumah}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">KOTA</th>
                <td><b>{{$pegawais->kota}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">KODE POS</th>
                <td><b>{{$pegawais->kode_pos}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR TELEPON</th>
                <td>
                    <b>{{$pegawais->telepon->first()->telepon}}</b>
                </td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR STR (SURAT TANDA REGISTRASI)</th>
                <td><b>{{$pegawais->str}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">MASA BERLAKU STR</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->masa_str)) }}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR SIKP (SURAT IZIN KERJA PERAWAT)</th>
                <td><b>{{$pegawais->sikp}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">MASA BERLAKU SIKP</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->masa_sikp)) }}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR SPK (SURAT PENUGASAAN KEWENANGAN KLINIS)</th>
                <td><b>{{$pegawais->spk}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">MASA BERLAKU SPK</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->masa_spk)) }}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR RKK (RINCIAN KEWENANGAN KLINIS)</th>
                <td><b>{{$pegawais->rkk}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">MASA BERLAKU RKK</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->masa_rkk)) }}</b></td>
            </tr>
        </tbody>
    </table>


                                        <!-- <ul class="list-group">
                                                    <li class="list-group-item"><b>Eselon 1 : {{$pegawais->eselon_1}}</b></li>
                                                    <li class="list-group-item"><b>Eselon 2 : {{$pegawais->eselon_2}}</b></li>
                                                    <li class="list-group-item"><b>Eselon 3 : {{$pegawais->eselon_3}}</b></li>
                                                    <li class="list-group-item"><b>Eselon 4 : {{$pegawais->eselon_4}}</b></li>
                                                    <li class="list-group-item"><b>Nip Baru : {{$pegawais->nip_baru}}</b></li>
                                                    <li class="list-group-item"><b>Nip Lama : {{$pegawais->nip_lama}}</b></li>
                                                    <li class="list-group-item"><b>Nama Pegawai : {{$pegawais->nama_pegawai}}</b></li>
                                                    <li class="list-group-item"><b>Gelar Depan : {{$pegawais->gelar_depan}}</b></li>
                                                    <li class="list-group-item"><b>Gelar Belakang : {{$pegawais->gelar_belakang}}</b></li>
                                                    <li class="list-group-item"><b>Tempat Lahir : {{$pegawais->tempat_lahir}}</b></li>                                                   
                                                    <li class="list-group-item"><b>Tanggal Lahir : {{ date('d/m/Y',strtotime($pegawais->tanggal_lahir)) }}</b></li>
                                                    <li class="list-group-item"><b>Jenis Kelamin : 
                                                                                    @if($pegawais->jenis_kelamin == "P")
                                                                                    Pria
                                                                                    @elseif($pegawais->jenis_kelamin == "W")
                                                                                    Wanita
                                                                                    @endif
                                                                                    </b></li>
                                                    <li class="list-group-item"><b>Status Keluarga : 
                                                                                    @if($pegawais->status_keluarga == "K")
                                                                                    Nikah
                                                                                    @elseif($pegawais->status_keluarga == "B")
                                                                                    Belum Menikah
                                                                                    @elseif($pegawais->status_keluarga == "D")
                                                                                    Duda
                                                                                    @elseif($pegawais->status_keluarga == "J")
                                                                                    Janda
                                                                                    @endif                                                         
                                                                                    </b></li>
                                                    <li class="list-group-item"><b>Agama : 
                                                                                    @if($pegawais->agama == "1")
                                                                                    Islam
                                                                                    @elseif($pegawais->agama == "2")
                                                                                    Katholik                                     
                                                                                    @elseif($pegawais->agama == "3")
                                                                                    Protestan
                                                                                    @elseif($pegawais->agama == "4")
                                                                                    Hindu
                                                                                    @elseif($pegawais->agama == "5")
                                                                                    Budha 
                                                                                    @elseif($pegawais->agama == "6")
                                                                                    Kristen
                                                                                    @endif
                                                                                    </b></li>
                                                    <li class="list-group-item"><b>Pendidikan Akhir : 
                                                @if($pegawais->pendidikan_akhir == "01")
                                                S3 (Setara)
                                                @elseif($pegawais->pendidikan_akhir == "02")
                                                S2 (Setara)
                                                @elseif($pegawais->pendidikan_akhir == "03")
                                                S1 (Setara)
                                                @elseif($pegawais->pendidikan_akhir == "04")
                                                D4
                                                @elseif($pegawais->pendidikan_akhir == "05")
                                                SM
                                                @elseif($pegawais->pendidikan_akhir == "06")
                                                D3
                                                @elseif($pegawais->pendidikan_akhir == "07")
                                                D2
                                                @elseif($pegawais->pendidikan_akhir == "08")
                                                D1
                                                @elseif($pegawais->pendidikan_akhir == "09")
                                                SLTA
                                                @elseif($pegawais->pendidikan_akhir == "10")
                                                SLTP
                                                @elseif($pegawais->pendidikan_akhir == "11")
                                                SD
                                                @endif
                                                                                   </b></li>
                                                    <li class="list-group-item"><b>Nama Sekolah : {{$pegawais->nama_sekolah}}</b></li>
                                                    <li class="list-group-item"><b>Tahun Lulus : {{$pegawais->tahun_lulus}}</b></li>
                                                    <li class="list-group-item"><b>Jurusan / Prodi : {{$pegawais->jurusan_prodi}}</b></li>
                                                    <li class="list-group-item"><b>Status Kepegawaian : 
                                                @if($pegawais->status_kepegawaian == "01")
                                                CPNS
                                                @elseif($pegawais->status_kepegawaian == "02")
                                                PNS
                                                @elseif($pegawais->status_kepegawaian == "03")
                                                PNS DPK DARI DEP.LAIN
                                                @elseif($pegawais->status_kepegawaian == "04")
                                                PNS DPK KE DEP.LAIN
                                                @endif
                                                    </b></li>
                                                    <li class="list-group-item"><b>Instansi Asal : {{$pegawais->instansi_asal}}</b></li>
                                                    <li class="list-group-item"><b>TMT CPNS : {{ date('d/m/Y',strtotime($pegawais->tmt_cpns)) }}</b></li>
                                                    <li class="list-group-item"><b>Golongan : {{$pegawais->golongan}}</b></li>
                                                    <li class="list-group-item"><b>TMT Golongan : {{ date('d/m/Y',strtotime($pegawais->tmt_golongan)) }}</b></li>
                                                    <li class="list-group-item"><b>Nama Jabatan : {{$pegawais->nama_jabatan}}</b></li>
                                                    <li class="list-group-item"><b>Nomor Karpeg : {{$pegawais->nomor_karpeg}}</b></li>
                                                    <li class="list-group-item"><b>Taspen : 
                                                @if($pegawais->taspen == "1")
                                                Sudah
                                                @elseif($pegawais->taspen == "2")
                                                Belum
                                                @endif
                                                    </b></li>
                                                    <li class="list-group-item"><b>Nomor NPWP : {{$pegawais->nomor_npwp}}</b></li>
                                                    <li class="list-group-item"><b>Alamat Rumah : {{$pegawais->alamat_rumah}}</b></li>
                                                    <li class="list-group-item"><b>Kota : {{$pegawais->kota}}</b></li>
                                                    <li class="list-group-item"><b>Kode Pos : {{$pegawais->kode_pos}}</b></li>
                                                    <li class="list-group-item"><b>Nomor Telepon : {{$pegawais->telepon->first()->telepon}}</b></li>
                                                    <li class="list-group-item"><b>STR : {{$pegawais->str}}</b></li>
                                                    <li class="list-group-item"><b>Masa STR : {{ date('d/m/Y',strtotime($pegawais->masa_str)) }}</b></li>
                                                    <li class="list-group-item"><b>SIKP : {{$pegawais->sikp}}</b></li>
                                                    <li class="list-group-item"><b>Masa SIKP : {{ date('d/m/Y',strtotime($pegawais->masa_sikp)) }}</b></li>
                                                    <li class="list-group-item"><b>SPK : {{$pegawais->spk}}</b></li>
                                                    <li class="list-group-item"><b>Masa SPK : {{ date('d/m/Y',strtotime($pegawais->masa_spk)) }}</b></li>
                                                    <li class="list-group-item"><b>RKK : {{$pegawais->rkk}}</b></li>
                                                    <li class="list-group-item"><b>Masa RKK : {{ date('d/m/Y',strtotime($pegawais->masa_rkk)) }}</b></li>
                                        </ul> -->
                                        @endif
                                        @endforeach
                                                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>