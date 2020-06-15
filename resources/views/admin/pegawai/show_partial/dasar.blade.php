<div id="dasar">
    <div class="text-center titlepertab">Data Pegawai</div>
    <table class="mb-0 table table-striped">
        <tbody>
            <tr>
                <th scope="row" class="sidetable">ESELON I</th>
                <td>{{$pegawai->eselon_1}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">ESELON II</th>
                <td>{{$pegawai->eselon_2}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">ESELON III</th>
                <td>{{$pegawai->eselon_3}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">ESELON IV</th>
                <td>{{$pegawai->eselon_4}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NIP BARU</th>
                <td>{{$pegawai->nip_baru}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NIP LAMA</th>
                <td>{{$pegawai->nip_lama}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NAMA PEGAWAI</th>
                <td>{{$pegawai->nama_pegawai}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">GELAR DEPAN</th>
                <td>{{$pegawai->gelar_depan}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">GELAR BELAKANG</th>
                <td>{{$pegawai->gelar_belakang}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TANGGAL LAHIR</th>
                <td>{{$pegawai->tanggal_lahir}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TEMPAT LAHIR</th>
                <td>{{$pegawai->tempat_lahir}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">JENIS KELAMIN</th>
                <td>{{$pegawai->jenis_kelamin}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">STATUS KELUARGA</th>
                <td>{{$pegawai->status_keluarga}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">AGAMA</th>
                <td>{{$pegawai->agama}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">PENDIDIKAN AKHIR</th>
                <td>{{$pegawai->pendidikan_akhir}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NAMA SEKOLAH/TAHUN LULUS</th>
                <td>{{$pegawai->nama_sekolah}}/{{$pegawai->tahun_lulus}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">JURUSAN / PROGRAM STUDI</th>
                <td>{{$pegawai->jurusan_prodi}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">STATUS KEPEGAWAIAN</th>
                <td>{{$pegawai->status_kepegawaian}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">INSTANSI ASAL</th>
                <td>{{$pegawai->instansi_asal}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TMT CALON PEGAWAI NEGERI SIPIL</th>
                <td>{{$pegawai->tmt_cpns}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">GOLONGAN/RUANG TERAKHIR</th>
                <td>{{$pegawai->golongan}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TMT Golongan</th>
                <td>{{$pegawai->tmt_golongan}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NAMA JABATAN</th>
                <td>{{$pegawai->nama_jabatan}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR KARPEG</th>
                <td>{{$pegawai->nomor_karpeg}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TASPEN</th>
                <td>{{$pegawai->taspen}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR NPWP</th>
                <td>{{$pegawai->nomor_npwp}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">ALAMAT RUMAH</th>
                <td>{{$pegawai->alamat_rumah}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">KOTA</th>
                <td>{{$pegawai->kota}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">KODE POS</th>
                <td>{{$pegawai->kode_pos}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR TELEPON</th>
                <td>
                    @if (!empty($pegawai->telepon->telepon))
                        {{$pegawai->telepon->telepon}}
                    @endif
                </td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR STR (SURAT TANDA REGISTRASI)</th>
                <td>{{$pegawai->str}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">MASA BERLAKU STR</th>
                <td>{{$pegawai->masa_str}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR SIKP (SURAT IZIN KERJA PERAWAT)</th>
                <td>{{$pegawai->sikp}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">MASA BERLAKU SIKP</th>
                <td>{{$pegawai->masa_sikp}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR SPK (SURAT PENUGASAAN KEWENANGAN KLINIS)</th>
                <td>{{$pegawai->spk}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">MASA BERLAKU SPK</th>
                <td>{{$pegawai->masa_spk}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR RKK (RINCIAN KEWENANGAN KLINIS)</th>
                <td>{{$pegawai->rkk}}</td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">MASA BERLAKU RKK</th>
                <td>{{$pegawai->masa_rkk}}</td>
            </tr>
        </tbody>
    </table>
</div>
