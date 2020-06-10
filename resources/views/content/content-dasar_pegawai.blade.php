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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Dasar Pegawai</h5>
                                
                                         


                                        <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeTambah"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah
                                        </button>
                                 

                                        @foreach($pegawai as $key => $pegawais)
                                        @if(auth()->user()->id == $pegawais->user_id)
                                                <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$pegawais->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Ubah
                                                </button>

                                                @if(auth()->user()->level == 'ADMIN')
                                                <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$pegawais->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i> Hapus
                                                </button>
                                                <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeHistory-{{$pegawais->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use history"></i> History
                                                </button>
                                                @endif           
                                        <ul class="list-group">
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
                                                    <li class="list-group-item"><b>Tanggal Lahir : {{ date('d/m/Y',strtotime($pegawais->tanggal_lahir)) }}</li>
                                                    <li class="list-group-item"><b>Jenis Kelamin : {{$pegawais->jenis_kelamin}}</b></li>
                                                    <li class="list-group-item"><b>Status Keluarga : {{$pegawais->status_keluarga}}</b></li>
                                                    <li class="list-group-item"><b>Agama : {{$pegawais->agama}}</b></li>
                                                    <li class="list-group-item"><b>Pendidikan Akhir : {{$pegawais->pendidikan_akhir}}</b></li>
                                                    <li class="list-group-item"><b>Nama Sekolah : {{$pegawais->nama_sekolah}}</b></li>
                                                    <li class="list-group-item"><b>Tahun Lulus : {{$pegawais->tahun_lulus}}</b></li>
                                                    <li class="list-group-item"><b>Jurusan / Prodi : {{$pegawais->jurusan_prodi}}</b></li>
                                                    <li class="list-group-item"><b>Status_kepegawaian : {{$pegawais->status_kepegawaian}}</b></li>
                                                    <li class="list-group-item"><b>Instansi Asal : {{$pegawais->instansi_asal}}</b></li>
                                                    <li class="list-group-item"><b>TMT CPNS : {{$pegawais->tmt_cpns}}</b></li>
                                                    <li class="list-group-item"><b>Golongan : {{$pegawais->golongan}}</b></li>
                                                    <li class="list-group-item"><b>TMT Golongan : {{ date('d/m/Y',strtotime($pegawais->tmt_golongan)) }}</b></li>
                                                    <li class="list-group-item"><b>Nama Jabatan : {{$pegawais->nama_jabatan}}</b></li>
                                                    <li class="list-group-item"><b>Nomor Karpeg : {{$pegawais->nomor_karpeg}}</b></li>
                                                    <li class="list-group-item"><b>Taspen : {{$pegawais->taspen}}</b></li>
                                                    <li class="list-group-item"><b>Nomor NPWP : {{$pegawais->nomor_npwp}}</b></li>
                                                    <li class="list-group-item"><b>Alamat Rumah : {{$pegawais->alamat_rumah}}</b></li>
                                                    <li class="list-group-item"><b>Kota : {{$pegawais->kota}}</b></li>
                                                    <li class="list-group-item"><b>Kode Pos : {{$pegawais->kode_pos}}</b></li>
                                                    <li class="list-group-item"><b>STR : {{$pegawais->str}}</b></li>
                                                    <li class="list-group-item"><b>Masa STR : {{ date('d/m/Y',strtotime($pegawais->masa_str)) }}</b></li>
                                                    <li class="list-group-item"><b>SIKP : {{$pegawais->sikp}}</b></li>
                                                    <li class="list-group-item"><b>Masa SIKP : {{ date('d/m/Y',strtotime($pegawais->masa_sikp)) }}</b></li>
                                                    <li class="list-group-item"><b>SPK : {{$pegawais->spk}}</b></li>
                                                    <li class="list-group-item"><b>Masa SPK : {{ date('d/m/Y',strtotime($pegawais->masa_spk)) }}</b></li>
                                                    <li class="list-group-item"><b>RKK : {{$pegawais->rkk}}</b></li>
                                                    <li class="list-group-item"><b>Masa RKK : {{ date('d/m/Y',strtotime($pegawais->masa_rkk)) }}</b></li>
                                        </ul>
                                        @endif
                                        @endforeach

                                        
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Option</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($pegawai as $key => $pegawais)
                                            @if(auth()->user()->id == $pegawais->user_id)
                                            <tr>
                                                <th scope="row">{{++$key}}</th>
                                                <td>{{$pegawais->nip_baru}}</td>
                                                <td>{{$pegawais->nama_pegawai}}</td>
                                                <td>
                                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$pegawais->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use address-card"></i> Lihat
                                                    </button>||&nbsp;
                                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$pegawais->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Ubah
                                                    </button>||&nbsp;
                                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$pegawais->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i> Hapus
                                                    </button>||&nbsp;
                                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeHistory-{{$pegawais->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use history"></i> History
                                                    </button>
                                              </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                            </tbody>
                                        </table>
                                            
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>