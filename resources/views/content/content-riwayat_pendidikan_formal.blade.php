<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-note2 icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Riwayat Pendidikan Formal
                                        <div class="page-title-subheading">Isi data riwayat pendidikan formal anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Riwayat Pendidikan Formal</h5>
                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeTambah"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah
                                        </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun</th>
                                                <th>Tingkat Pendidikan</th>
                                                <th>Nama Sekolah</th>
                                                <th>Jurusan Prodi</th>
                                                <th>Tahun Masuk</th>
                                                <th>Tahun Lulus</th>
                                                <th>Tempat Belajar</th>
                                                <th>Lokasi</th>
                                                <th>Nomor Ijazah</th>
                                                <th>Menu</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($riwayat_pendidikan_formal as $key => $riwayat_pendidikan_formals)
                                            @if(auth()->user()->id == $riwayat_pendidikan_formals->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$key}}</th>
                                                <td>{{$riwayat_pendidikan_formals->tahun}}</td>
                                                <td>
                                                @if($riwayat_pendidikan_formals->tingkat_pendidikan == "01") 
                                                S3 (Setara)                                             
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "02") 
                                                S2 (Setara)                                              
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "03")                                    
                                                S1 (Setara)                      
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "04")                                              
                                                D4                                          
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "05")                                             
                                                SM                                       
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "06")                                   
                                                D3                                            
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "07")                                              
                                                D2                                               
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "08")                                             
                                                D1                                             
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "09")                                     
                                                SLTA                                    
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "10")                                       
                                                SLTP                                             
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "11")                                             
                                                SD
                                                @endif
                                                </td>
                                                <td>{{$riwayat_pendidikan_formals->nama_sekolah}}</td>
                                                <td>{{$riwayat_pendidikan_formals->jurusan_prodi}}</td>
                                                <td>{{$riwayat_pendidikan_formals->tahun_masuk}}</td>
                                                <td>{{$riwayat_pendidikan_formals->tahun_lulus}}</td>
                                                <td>
                                                    @if($riwayat_pendidikan_formals->tempat_belajar == "1")
                                                    Dalam Negeri
                                                    @elseif($riwayat_diklat_fungsionals->tempat_belajar == "2")
                                                    Luar Negeri
                                                    @endif
                                                </td>
                                                <td>{{$riwayat_pendidikan_formals->lokasi}}</td>
                                                <td>{{$riwayat_pendidikan_formals->nomor_ijazah}}</td>
                                                <td>
                                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$riwayat_pendidikan_formals->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use address-card"></i> Lihat
                                                    </button>||&nbsp;
                                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$riwayat_pendidikan_formals->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Ubah
                                                    </button>||&nbsp;
                                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$riwayat_pendidikan_formals->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i> Hapus
                                                    </button>||&nbsp;
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
