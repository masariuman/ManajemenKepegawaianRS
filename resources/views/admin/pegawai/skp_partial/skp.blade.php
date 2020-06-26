<div id="dataSkp">
    <div class="text-center">
        <select name="tahun" class="mb-2 mr-2 btn-transition btn btn-outline-dark" >
            @foreach ($tahun as $item)
                <option value="{{$item}}" {{$periode->tahun == $item  ? 'selected' : ''}}>{{$item}}</option>
            @endforeach
        </select>
        <select name="kategori" class="mb-2 mr-2 btn-transition btn btn-outline-dark">
            <option value="semester1" {{$periode->periode == 'Semester 1'  ? 'selected' : ''}}>Semester 1</option>
            <option value="semester2" {{$periode->periode == 'Semester 2'  ? 'selected' : ''}}>Semester 2</option>
            <option value="setahun" {{$periode->periode == 'Setahun'  ? 'selected' : ''}}>Setahun</option>
        </select>
    </div>
    <div class="text-center">
        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate active" id="data_skpB">Data SKP</button>
        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate" id="form_skpB">Form SKP</button>
        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate" id="pengukuranB">Pengukuran</button>
        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate" id="perilaku_kerjaB">Perilaku Kerja</button>
        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate" id="penilaianB">Penilaian</button>
    </div>
    <div id="skp" style="">
        <div class="text-center titlepertab">Data Sasaran Kerja Pegawai</div>
        @if (empty($skp))
            <h5 class="text-center" style="color: red;">PEGAWAI BELUM MENGISI DATA SKP PADA PERIODE {{$periode->tahun}} {{$periode->periode}}</h5>
        @else
            <div class="margintop20">
                <h5 style="font-weight: bold;">YANG DINILAI</h5>
                <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">NAMA</th>
                            <td>{{$pegawai->user->name}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NIP</th>
                            <td>{{$pegawai->nip_baru}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PANGKAT / GOLONGAN RUANG</th>
                            <td>{{$pegawai->golongan}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JABATAN</th>
                            <td>{{$pegawai->nama_jabatan}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">UNIT KERJA</th>
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
                            <th scope="row" class="sidetable">NAMA</th>
                            <td>{{$skp->nama_pejabat_penilai}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NIP</th>
                            <td>{{$skp->nip_pejabat_penilai}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PANGKAT / GOLONGAN RUANG</th>
                            <td>{{$skp->pangkat_golongan_ruang_penilai}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JABATAN</th>
                            <td>{{$skp->jabatan_penilai}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">UNIT KERJA</th>
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
                            <th scope="row" class="sidetable">NAMA</th>
                            <td>{{$skp->nama_atasan_pejabat_penilai}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NIP</th>
                            <td>{{$skp->nip_atasan_pejabat_penilai}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PANGKAT / GOLONGAN RUANG</th>
                            <td>{{$skp->pangkat_golongan_ruang_atasan_penilai}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JABATAN</th>
                            <td>{{$skp->jabatan_atasan_penilai}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">UNIT KERJA</th>
                            <td>{{$skp->unit_kerja_atasan_penilai}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
