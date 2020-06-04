<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-note2 icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Keanggotaan Organisasi
                                        <div class="page-title-subheading">Isi data keanggotaan organisasi anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Keanggotaan Organisasi</h5>
                                        <form class="" action="" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Diklat / Kursus</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Isi disini.." type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tempat Belajar</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Isi disini.." type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Lokasi</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Isi disini.." type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Mulai</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Isi disini.." type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Jam</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Isi disini.." type="text" class="form-control" value=""></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Penyelenggara</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Isi disini.." type="text" class="form-control" value=""></div>          
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