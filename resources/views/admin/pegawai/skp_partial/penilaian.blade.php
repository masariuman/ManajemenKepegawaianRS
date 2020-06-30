<div id="penilaian" style="">
    <div class="text-center titlepertab">Penilaian Prestasi Kerja<br /> Pegawai negeri Sipil</div>
@if (empty($perilakuKerjaSkp))
        <h5 class="text-center" style="color: red;">PEGAWAI BELUM MENGISI DATA PADA PERIODE {{$periode->tahun}} {{$periode->periode}}</h5>
    @else
        <div class="margintop20">
            <h5 style="font-weight: bold;">YANG DINILAI</h5>
            <table class="mb-0 table table-striped">
                <tbody>
                    <tr>
                        <th scope="row" class="sidetable350">NAMA</th>
                        <td class="width1000">{{$pegawai->user->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">NIP</th>
                        <td>{{$pegawai->nip_baru}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">PANGKAT / GOLONGAN RUANG</th>
                        <td>{{$pegawai->golongan}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">JABATAN</th>
                        <td>{{$pegawai->nama_jabatan}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">UNIT KERJA</th>
                        <td>RS. Universitas Tanjungpura</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="margintop20">
            <h5 style="font-weight: bold;">PEJABAT PENILAI</h5>
            <table class="mb-0 table table-striped">
                <tbody>
                    <tr>
                        <th scope="row" class="sidetable350">NAMA</th>
                        <td class="width1000">{{$skp->nama_pejabat_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">NIP</th>
                        <td>{{$skp->nip_pejabat_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">PANGKAT / GOLONGAN RUANG</th>
                        <td>{{$skp->pangkat_golongan_ruang_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">JABATAN</th>
                        <td>{{$skp->jabatan_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">UNIT KERJA</th>
                        <td>{{$skp->unit_kerja_penilai}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="margintop20">
            <h5 style="font-weight: bold;">ATASAN PENJABAT PENILAI</h5>
            <table class="mb-0 table table-striped">
                <tbody>
                    <tr>
                        <th scope="row" class="sidetable350">NAMA</th>
                        <td class="width1000">{{$skp->nama_atasan_pejabat_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">NIP</th>
                        <td>{{$skp->nip_atasan_pejabat_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">PANGKAT / GOLONGAN RUANG</th>
                        <td>{{$skp->pangkat_golongan_ruang_atasan_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">JABATAN</th>
                        <td>{{$skp->jabatan_atasan_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">UNIT KERJA</th>
                        <td>{{$skp->unit_kerja_atasan_penilai}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="margintop20">
            <h5 style="font-weight: bold;">UNSUR YANG DINILAI</h5>
            <table class="mb-0 table table-bordered">
                <tbody>
                    <tr>
                        <td colspan="4">UNSUR YANG DINILAI</td>
                        <td>JUMLAH</td>
                    </tr>
                    <tr>
                        <td colspan="2">a. Sasaran Kerja Pegawai (SKP)</td>
                        <td class="text-center bold" colspan="2"> X 60%</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>
