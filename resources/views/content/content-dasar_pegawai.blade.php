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
                                        <form class="" action="{{route('dasar_pegawai_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Eselon I</b></label>
                                                <div class="col-sm-10"><input name="eselon_1" id="exampleEmail" placeholder="Unit Eselon I" type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Eselon II</b></label>
                                                <div class="col-sm-10"><input name="eselon_2" id="exampleEmail" placeholder="Unit Eselon II" type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Eselon III</b></label>
                                                <div class="col-sm-10"><input name="eselon_3" id="exampleEmail" placeholder="Unit Eselon III" type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Eselon IV</b></label>
                                                <div class="col-sm-10"><input name="eselon_4" id="exampleEmail" placeholder="Unit Eselon IV" type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Baru</b></label>
                                                <div class="col-sm-10"><input name="nip_baru" id="exampleEmail" placeholder="Nomor Induk Pegawai Baru" type="number" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Lama</b></label>
                                                <div class="col-sm-10"><input name="nip_lama" id="exampleEmail" placeholder="Nomor Induk Pegawai Lama" type="number" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Pegawai</b></label>
                                                <div class="col-sm-10"><input name="nama_pegawai" id="exampleEmail" placeholder="Nama Pegawai" type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Gelar Depan</b></label>
                                                <div class="col-sm-10"><input name="gelar_depan" id="exampleEmail" placeholder="Contoh : Dr. Ir." type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Gelar Belakang</b></label>
                                                <div class="col-sm-10"><input name="gelar_belakang" id="exampleEmail" placeholder="Contoh : M.Sc, S.H S.sos." type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tempat Lahir</b></label>
                                                <div class="col-sm-10"><input name="tempat_lahir" id="exampleEmail" placeholder="Tempat Lahir" type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir" type="date" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Kelamin</b></label>
                                                <div class="col-sm-10"><select name="jenis_kelamin" id="exampleSelect" class="form-control">
                                                <option value="" disabled selected>-Pilih Jenis Kelamin-</option>
                                                <option value="P">Pria</option>
                                                <option value="W">Wanita</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Status Keluarga</b></label>
                                                <div class="col-sm-10"><select name="status_keluarga" id="exampleSelect" class="form-control">
                                                <option value="" disabled selected>-Pilih Status Keluarga-</option>
                                                <option value="K">Nikah</option>
                                                <option value="B">Belum Menikah</option>
                                                <option value="D">Duda</option>
                                                <option value="J">Janda</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Agama</b></label>
                                                <div class="col-sm-10"><select name="agama" id="exampleSelect" class="form-control">
                                                <option value="" disabled selected>-Pilih Agama-</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Katholik</option>
                                                <option value="3">Protestan</option>
                                                <option value="4">Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6">Kristen</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Pendidikan Akhir</b></label>
                                                <div class="col-sm-10"><select name="pendidikan_akhir" id="exampleSelect" class="form-control">
                                                <option value="" disabled selected>-Pilih Pendidikan Akhir-</option>
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Sekolah /</b></label>
                                                <div class="col-sm-10"><input name="nama_sekolah" id="exampleEmail" placeholder="Nama Sekolah /" type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>/ Tahun Lulus</b></label>
                                                <div class="col-sm-10"><input name="tahun_lulus" id="exampleEmail" placeholder="/ Tahun Lulus" type="date" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jurusan / Program Studi</b></label>
                                                <div class="col-sm-10"><input name="jurusan_prodi" id="exampleEmail" placeholder="Jurusan / Program Studi" type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Status Kepegawaian</b></label>
                                                <div class="col-sm-10"><select name="status_kepegawaian" id="exampleSelect" class="form-control">
                                                <option value="" disabled selected>-Pilih Status Kepegawaian-</option>
                                                <option value="01">CPNS</option>
                                                <option value="02">PNS</option>
                                                <option value="03">PNS DPK DARI DEP.LAIN</option>
                                                <option value="04">PNS DPK KE DEP.LAIN</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Instalasi Asal</b></label>
                                                <div class="col-sm-10"><input name="instalasi_asal" id="exampleEmail" placeholder="Instalasi Asal" type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>TMT Calon Pegawai Negeri Sipil</b></label>
                                                <div class="col-sm-10"><input name="tmt_cpns" id="exampleEmail" placeholder="TMT Calon Pegawai Negeri Sipil" type="date" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Golongan / Ruang Terakhir</b></label>
                                                <div class="col-sm-10"><input name="golongan" id="exampleEmail" placeholder="Contoh : Gol/ruang II/a ditulis 2a" type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>TMT Golongan</b></label>
                                                <div class="col-sm-10"><input name="tmt_golongan" id="exampleEmail" placeholder="TMT Golongan" type="date" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Jabatan</b></label>
                                                <div class="col-sm-10"><input name="nama_jabatan" id="exampleEmail" placeholder="Nama Jabatan" type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor KARPEG</b></label>
                                                <div class="col-sm-10"><input name="nomor_karpeg" id="exampleEmail" placeholder="Nomor KARPEG" type="number" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Taspen</b></label>
                                                <div class="col-sm-10"><select name="taspen" id="exampleSelect" class="form-control">
                                                <option value="" disabled selected>-Pilih Taspen-</option>
                                                <option value="1">Sudah</option>
                                                <option value="2">Belum</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor NPWP</b></label>
                                                <div class="col-sm-10"><input name="nomor_npwp" id="exampleEmail" placeholder="Nomor NPWP" type="number" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label"><b>Alamat Rumah</b></label>
                                                <div class="col-sm-10"><textarea name="alamat_rumah" id="exampleText" placeholder="Alamat Rumah" class="form-control"></textarea></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kota</b></label>
                                                <div class="col-sm-10"><input name="kota" id="exampleEmail" placeholder="Kota" type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kode Pos</b></label>
                                                <div class="col-sm-10"><input name="kode_pos" id="exampleEmail" placeholder="Kode Pos" type="number" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor Telepon Rumah</b></label>
                                                <div class="col-sm-10"><input name="telepon" id="exampleEmail" placeholder="Nomor Telepon Rumah" type="number" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor STR</b></label>
                                                <div class="col-sm-10"><input name="str" id="exampleEmail" placeholder="Nomor Surat Tanda Registrasi" type="number" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>MASA STR</b></label>
                                                <div class="col-sm-10"><input name="masa_str" id="exampleEmail" placeholder="MASA Surat Tanda Registrasi" type="date" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SKIP</b></label>
                                                <div class="col-sm-10"><input name="skip" id="exampleEmail" placeholder="Nomor Surat Izin Kerja Perawat" type="number" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>MASA SKIP</b></label>
                                                <div class="col-sm-10"><input name="masa_skip" id="exampleEmail" placeholder="MASA Surat Izin Kerja Perawat" type="date" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SPK</b></label>
                                                <div class="col-sm-10"><input name="spk" id="exampleEmail" placeholder="Nomor Surat Penugasan Kewenangan Klinis" type="number" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>MASA SPK</b></label>
                                                <div class="col-sm-10"><input name="masa_spk" id="exampleEmail" placeholder="MASA Surat Penugasan Kewenangan Klinis" type="date" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor RKK</b></label>
                                                <div class="col-sm-10"><input name="rkk" id="exampleEmail" placeholder="Nomor Rinician Kewenangan Klinis" type="number" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>MASA RKK</b></label>
                                                <div class="col-sm-10"><input name="masa_rkk" id="exampleEmail" placeholder="MASA Rincian Kewenangan Klinis" type="date" class="form-control" value=""></div>          
                                            </div>
                                            <!-- <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label"><b>Image</b></label>
                                                <div class="col-sm-10"><input name="image" id="exampleFile" type="file" class="form-control-file  @error('image') is-invalid @enderror" value="{{ old('image')}}"><p class="text-danger">@error('image') {{$message}} @enderror</p>
                                                    <small class="form-text text-muted">Masukan gambar pilihan anda.</small>
                                                </div>
                                            </div> -->
     
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Biaya Program</label>
                                                <div class="col-sm-10"><input name="biaya_program" id="exampleEmail" placeholder="Isi disini.." type="number" class="form-control @error('biaya_program') is-invalid @enderror" value="{{ old('biaya_program')}}"><p class="text-danger">@error('biaya_program') {{$message}} @enderror</p></div>
                                            </div> -->
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Biaya Program</b></label>
                                             <div class="col-sm-10"> 
                                              <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Branch cluster</label><input name="branch_cluster" id="exampleEmail11" placeholder="Isi disini.." type="text" class="form-control @error('branch_cluster') is-invalid @enderror" value="{{ old('branch_cluster')}}"><p class="text-danger">@error('branch_cluster') {{$message}} @enderror</p></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Potensi</label><input name="potensi" id="examplePassword11" placeholder="Isi disini.." type="text" class="form-control @error('potensi') is-invalid @enderror" value="{{ old('potensi')}}"><p class="text-danger">@error('potensi') {{$message}} @enderror</p></div>
                                                </div>
                                               </div>

                                               <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Akusisi CB</label><input name="akusisi_cb" id="exampleEmail11" placeholder="Isi disini.." type="text" class="form-control @error('akusisi_cb') is-invalid @enderror" value="{{ old('akusisi_cb')}}"><p class="text-danger">@error('akusisi_cb') {{$message}} @enderror</p></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">APPU</label><input name="appu" id="examplePassword11" placeholder="Isi disini.." type="text" class="form-control @error('appu') is-invalid @enderror" value="{{ old('appu')}}"><p class="text-danger">@error('appu') {{$message}} @enderror</p></div>
                                                </div>
                                               </div>

                                               <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Durasi Waktu</label><input name="durasi_waktu" id="exampleEmail11" placeholder="Isi disini.." type="text" class="form-control @error('durasi_waktu') is-invalid @enderror" value="{{ old('durasi_waktu')}}"><p class="text-danger">@error('durasi_waktu') {{$message}} @enderror</p></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Revenue Incremental</label><input name="revenue_incremental" id="examplePassword11" placeholder="Isi disini.." type="text" class="form-control @error('revenue_incremental') is-invalid @enderror" value="{{ old('revenue_incremental')}}"><p class="text-danger">@error('revenue_incremental') {{$message}} @enderror</p></div>
                                                </div>
                                               </div>
                                               
                                              </div>
                                            </div> -->

        

                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Branch cluster</label>
                                                <div class="col-sm-10"><input name="branch_cluster" id="exampleEmail" placeholder="Isi disini.." type="text" class="form-control @error('branch_cluster') is-invalid @enderror" value="{{ old('branch_cluster')}}"><p class="text-danger">@error('branch_cluster') {{$message}} @enderror</p></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Potensi</label>
                                                <div class="col-sm-10"><input name="potensi" id="exampleEmail" placeholder="Isi disini.." type="text" class="form-control @error('potensi') is-invalid @enderror" value="{{ old('potensi')}}"><p class="text-danger">@error('potensi') {{$message}} @enderror</p></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Akusisi CB</label>
                                                <div class="col-sm-10"><input name="akusisi_cb" id="exampleEmail" placeholder="Isi disini.." type="text" class="form-control @error('akusisi_cb') is-invalid @enderror" value="{{ old('akusisi_cb')}}"><p class="text-danger">@error('akusisi_cb') {{$message}} @enderror</p></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">APPU</label>
                                                <div class="col-sm-10"><input name="appu" id="exampleEmail" placeholder="Isi disini.." type="text" class="form-control @error('appu') is-invalid @enderror" value="{{ old('appu')}}"><p class="text-danger">@error('appu') {{$message}} @enderror</p></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Durasi Waktu</label>
                                                <div class="col-sm-10"><input name="durasi_waktu" id="exampleEmail" placeholder="Isi disini.." type="text" class="form-control @error('durasi_waktu') is-invalid @enderror" value="{{ old('durasi_waktu')}}"><p class="text-danger">@error('durasi_waktu') {{$message}} @enderror</p></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Revenue Incremental</label>
                                                <div class="col-sm-10"><input name="revenue_incremental" id="exampleEmail" placeholder="Isi disini.." type="text" class="form-control @error('revenue_incremental') is-invalid @enderror" value="{{ old('revenue_incremental')}}"><p class="text-danger">@error('revenue_incremental') {{$message}} @enderror</p></div>
                                            </div> -->

                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Select</label>
                                                <div class="col-sm-10"><select name="select" id="exampleSelect" class="form-control"></select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelectMulti" class="col-sm-2 col-form-label">Select Multiple</label>
                                                <div class="col-sm-10"><select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control"></select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Text Area</label>
                                                <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                            </div> -->
                                            <!-- <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                                                <div class="col-sm-10"><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                    <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                </div>
                                            </div>
                                            <fieldset class="position-relative row form-group">
                                                <legend class="col-form-label col-sm-2">Radio Buttons</legend>
                                                <div class="col-sm-10">
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option one is this and that—be sure to include why it's great</label></div>
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option two can be something else and selecting it will deselect option
                                                        one</label></div>
                                                    <div class="position-relative form-check disabled"><label class="form-check-label"><input name="radio2" disabled="" type="radio" class="form-check-input"> Option three is disabled</label></div>
                                                </div>
                                            </fieldset>
                                            <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Checkbox</label>
                                                <div class="col-sm-10">
                                                    <div class="position-relative form-check"><label class="form-check-label"><input id="checkbox2" type="checkbox" class="form-check-input"> Check me out</label></div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="position-relative row form-check"> -->
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <button class="mt-2 btn btn-light"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Submit</button>
                                                </div>
                                             </div>   
                                            <!-- </div> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>