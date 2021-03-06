<div id="pengukuran" style="display:none;">
    <div class="text-center titlepertab">Penilaian Capaian Kerja<br /> Pegawai negeri Sipil</div>
    @if (empty($formSkp))
        <h5 class="text-center" style="color: red;">PEGAWAI BELUM MENGISI DATA PERILAKU KERJA PEGAWAI NEGERI SIPIL PADA PERIODE {{$periode->tahun}} {{$periode->periode}}</h5>
    @else
        <div class="margintop20">
            <table class="mb-0 table table-bordered">
                <tbody>
                    <tr>
                        <td class="text-center bold" rowspan="2">NO</td>
                        <td class="text-center bold" rowspan="2">I. KEGIATAN TUGAS TAMBAHAN</td>
                        <td class="text-center bold" rowspan="2">AK</td>
                        <td class="text-center bold" colspan="6">TARGET</td>
                        <td class="text-center bold" rowspan="2">AK</td>
                        <td class="text-center bold" colspan="6">REALISASI</td>
                        <td class="text-center bold" rowspan="2">PENGHITUNGAN</td>
                        <td class="text-center bold" rowspan="2">NILAI CAPAIAN SKP</td>
                    </tr>
                    <tr>
                        <td class="text-center bold" colspan="2">Kuant/Output</td>
                        <td class="text-center bold">Kual/Mutu</td>
                        <td class="text-center bold" colspan="2">Waktu</td>
                        <td class="text-center bold">Biaya</td>
                        <td class="text-center bold" colspan="2">Kuant/Output</td>
                        <td class="text-center bold">Kual/Mutu</td>
                        <td class="text-center bold" colspan="2">Waktu</td>
                        <td class="text-center bold">Biaya</td>
                    </tr>
                    <tr>
                        <td class="text-center bold bgabu">1</td>
                        <td class="text-center bold bgabu">2</td>
                        <td class="text-center bold bgabu">3</td>
                        <td class="text-center bold bgabu" colspan="2">4</td>
                        <td class="text-center bold bgabu">5</td>
                        <td class="text-center bold bgabu" colspan="2">6</td>
                        <td class="text-center bold bgabu">7</td>
                        <td class="text-center bold bgabu">8</td>
                        <td class="text-center bold bgabu" colspan="2">9</td>
                        <td class="text-center bold bgabu">10</td>
                        <td class="text-center bold bgabu" colspan="2">11</td>
                        <td class="text-center bold bgabu">12</td>
                        <td class="text-center bold bgabu">13</td>
                        <td class="text-center bold bgabu">14</td>
                    </tr>
                    @foreach ($pengukuranSkp_kegiatan_tugas_tambahan as $item)
                        <tr>
                            <td class="text-center bold">{{$noPengukuranSkp =+ 1}}</td>
                            <td class="text-center">{{$item->kegiatan_tugas_tambahan}}</td>
                            <td class="text-center">{{$item->ak_target}}</td>
                            <td class="text-center">{{$item->target_kuant_output_1}}</td>
                            <td class="text-center">{{$item->target_kuant_output_2}}</td>
                            <td class="text-center">{{$item->target_kual_mutu}}</td>
                            <td class="text-center">{{$item->target_waktu}}</td>
                            <td class="text-center">bulan</td>
                            <td class="text-center">{{$item->target_biaya}}</td>
                            <td class="text-center">{{$item->ak_realisasi}}</td>
                            <td class="text-center">{{$item->realisasi_kuant_output_1}}</td>
                            <td class="text-center">{{$item->realisasi_kuant_output_2}}</td>
                            <td class="text-center">{{$item->realisasi_kual_mutu}}</td>
                            <td class="text-center">{{$item->realisasi_waktu}}</td>
                            <td class="text-center">bulan</td>
                            <td class="text-center">{{$item->realisasi_biaya}}</td>
                            <td class="text-center">{{$item->penghitungan}}</td>
                            <td class="text-center">{{$item->nilai_capaian_skp}}</td>
                        </tr>
                    @endforeach
                    @if ($countPengukuranSkp_tugas_tambahan != 0)
                        @foreach ($pengukuranSkp_tugas_tambahan as $item)
                            <tr><td class="text-center bold" colspan="18">TUGAS TAMBAHAN</td></tr>
                            <tr>
                                <td class="text-center bold">{{$noPengukuranSkp =+ 1}}</td>
                                <td class="text-center">{{$item->kegiatan_tugas_tambahan}}</td>
                                <td class="text-center">{{$item->ak_target}}</td>
                                <td class="text-center">{{$item->target_kuant_output_1}}</td>
                                <td class="text-center">{{$item->target_kuant_output_2}}</td>
                                <td class="text-center">{{$item->target_kual_mutu}}</td>
                                <td class="text-center">{{$item->target_waktu}}</td>
                                <td class="text-center">bulan</td>
                                <td class="text-center">{{$item->target_biaya}}</td>
                                <td class="text-center">{{$item->ak_realisasi}}</td>
                                <td class="text-center">{{$item->realisasi_kuant_output_1}}</td>
                                <td class="text-center">{{$item->realisasi_kuant_output_2}}</td>
                                <td class="text-center">{{$item->realisasi_kual_mutu}}</td>
                                <td class="text-center">{{$item->realisasi_waktu}}</td>
                                <td class="text-center">bulan</td>
                                <td class="text-center">{{$item->realisasi_biaya}}</td>
                                <td class="text-center">{{$item->penghitungan}}</td>
                                <td class="text-center">{{$totalNilaiCapaianSkp2}}</td>
                            </tr>
                        @endforeach
                    @endif
                    @if ($countPengukuranSkp_kreativitas != 0)
                        @foreach ($pengukuranSkp_kreativitas as $item)
                            <tr><td class="text-center bold" colspan="18">KREATIVITAS</td></tr>
                            <tr>
                                <td class="text-center bold">{{$noPengukuranSkp =+ 1}}</td>
                                <td class="text-center">{{$item->kegiatan_tugas_tambahan}}</td>
                                <td class="text-center">{{$item->ak_target}}</td>
                                <td class="text-center">{{$item->target_kuant_output_1}}</td>
                                <td class="text-center">{{$item->target_kuant_output_2}}</td>
                                <td class="text-center">{{$item->target_kual_mutu}}</td>
                                <td class="text-center">{{$item->target_waktu}}</td>
                                <td class="text-center">bulan</td>
                                <td class="text-center">{{$item->target_biaya}}</td>
                                <td class="text-center">{{$item->ak_realisasi}}</td>
                                <td class="text-center">{{$item->realisasi_kuant_output_1}}</td>
                                <td class="text-center">{{$item->realisasi_kuant_output_2}}</td>
                                <td class="text-center">{{$item->realisasi_kual_mutu}}</td>
                                <td class="text-center">{{$item->realisasi_waktu}}</td>
                                <td class="text-center">bulan</td>
                                <td class="text-center">{{$item->realisasi_biaya}}</td>
                                <td class="text-center">{{$item->penghitungan}}</td>
                                <td class="text-center">{{$totalNilaiCapaianSkp2}}</td>
                            </tr>
                        @endforeach
                    @endif
                    <tr>
                        <td class="bgabu text-center bold">TOTAL</td>
                        <td class="bgabu text-center bold">{{$totalKegiatan}}</td>
                        <td class="bgabu text-center bold">{{$totalAkTarget}}</td>
                        <td class="bgabu text-center bold">{{$totalKuantTarget1}}</td>
                        <td class="bgabu text-center bold">{{$totalKuantTarget2}}</td>
                        <td class="bgabu text-center bold">{{$totalKualTarget}}</td>
                        <td class="bgabu text-center bold">{{$totalWaktuTarget}}</td>
                        <td class="bgabu text-center bold">bulan</td>
                        <td class="bgabu text-center bold">{{$totalBiayaTarget}}</td>
                        <td class="bgabu text-center bold">{{$totalAkRealisasi}}</td>
                        <td class="bgabu text-center bold">{{$totalKuantRealisasi}}</td>
                        <td class="bgabu text-center bold">{{$totalKuantRealisasi2}}</td>
                        <td class="bgabu text-center bold">{{$totalKualRealisasi}}</td>
                        <td class="bgabu text-center bold">{{$totalWaktuRealisasi}}</td>
                        <td class="bgabu text-center bold">bulan</td>
                        <td class="bgabu text-center bold">{{$totalBiayaRealisasi}}</td>
                        <td class="bgabu text-center bold">{{$totalPenghitungan}}</td>
                        <td class="bgabu text-center bold">{{$totalNilaiCapaianSkp}}</td>
                    </tr>
                    <tr>
                        <td class="text-center bold" rowspan="2" colspan="17">NILAI CAPAIAN SKP</td>
                        <td class="text-center bold">{{$nilaiCapaianSkpFinal1}}</td>
                    </tr>
                    <tr>
                        <td class="text-center bold">{{$nilaiCapaianSkpFinal2}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>
