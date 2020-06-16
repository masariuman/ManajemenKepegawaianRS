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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Riwayat Pekerjaan / Jabatan</h5>
                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeTambah"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah
                                        </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun</th>
                                                <th>Nama Jabatan</th>
                                                <th>TMT Jabatan</th>
                                                <th>Nomor SK</th>
                                                <th>Tanggal SK</th>
                                                <th>Tahun Mulai</th>
                                                <th>Tahun Selesai</th>
                                                <th>NIP Pejabat Penandatangan SK</th>
                                                <th>NIP Lama Pejabat Penandatangan SK</th>
                                                <th>Pejabat Penandatangan SK</th>
                                                <th>Menu</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($riwayat_pekerjaan_jabatan as $key => $riwayat_pekerjaan_jabatans)
                                            @if(auth()->user()->id == $riwayat_pekerjaan_jabatans->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$key}}</th>
                                                <td>{{$riwayat_pekerjaan_jabatans->tahun}}</td>
                                                <td>{{$riwayat_pekerjaan_jabatans->nama_jabatan}}</td>
                                                <td>{{ date('d/m/Y',strtotime($riwayat_pekerjaan_jabatans->tmt_jabatan)) }}</td>
                                                <td>{{$riwayat_pekerjaan_jabatans->nomor_sk}}</td>
                                                <td>{{ date('d/m/Y',strtotime($riwayat_pekerjaan_jabatans->tanggal_sk)) }} </td>
                                                <td>{{$riwayat_pekerjaan_jabatans->tahun_mulai}}</td>
                                                <td>{{$riwayat_pekerjaan_jabatans->tahun_selesai}}</td>                   
                                                <td>{{$riwayat_pekerjaan_jabatans->nip_pejabat_penandatangan_sk}}</td>
                                                <td>{{$riwayat_pekerjaan_jabatans->nip_lama_pejabat_penandatangan_sk}}</td>
                                                <td>{{$riwayat_pekerjaan_jabatans->pejabat_penandatangan_sk}}</td>
                                                <td>
                                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$riwayat_pekerjaan_jabatans->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use address-card"></i> Lihat
                                                    </button>||&nbsp;
                                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$riwayat_pekerjaan_jabatans->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Ubah
                                                    </button>||&nbsp;
                                                    <button class="mb-2 mr-2 btn btn-light" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$riwayat_pekerjaan_jabatans->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i> Hapus
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
