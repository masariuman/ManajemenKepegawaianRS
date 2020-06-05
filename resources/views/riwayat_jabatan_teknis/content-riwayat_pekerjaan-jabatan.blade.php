<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-note2 icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Riwayat Pekerjaan Jabatan
                                        <div class="page-title-subheading">Isi data riwayat pekerjaan / jabatan anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Keluarga Istri Suami</h5>
                                        <form class="" action="" method="post">
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Jabatan</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Nama Jabatan" type="text" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>TMT Jabatan</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="TMT Jabatan" type="text" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SK</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Nomor SK" type="number" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal SK /</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Tanggal SK" type="date" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>/ Tahun Mulai /</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="/ Tahun Mulai /" type="number" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>/ s.d (Sampai Dengan)</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="/ s.d (Sampai Dengan)" type="number" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Pejabat Penandatangan SK</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="NIP Pejabat Penandatangan SK" type="number" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Lama Pejabat Penandatangan SK</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="NIP Lama Pejabat Penandatangan SK" type="number" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pejabat Penandatangan SK</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Pejabat Penandatangan SK" type="text" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <button class="mt-2 btn btn-light"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Submit</button>
                                                </div>
                                             </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
