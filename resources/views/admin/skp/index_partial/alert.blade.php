        @if ($setting->active_skp === "1")
              <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-exclamation"></i> PENGISIAN SKP DIBUKA SAMPAI TANGGAL {{$setting->terakhir_isi_skp}}</h4>
                {{$setting->pesan_skp}}
              </div>
        @endif
        @if ($count_str != 0)
              <div class="alert alert-warning alert-dismissible pointer" id="str_alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-exclamation"></i> Terdapat Beberapa Masa Berlaku STR Pegawai Akan Habis</h4>
                Terdapat {{$count_str}} orang dengan STR yang akan habis.
              </div>
        @endif
        @if ($count_sikp != 0)
              <div class="alert alert-warning alert-dismissible pointer" id="sikp_alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-exclamation"></i> Terdapat Beberapa Masa Berlaku SIKP Pegawai Akan Habis</h4>
                Terdapat {{$count_sikp}} orang dengan SIKP yang akan habis.
              </div>
        @endif
        @if ($count_spk != 0)
              <div class="alert alert-warning alert-dismissible pointer" id="spk_alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-exclamation"></i> Terdapat Beberapa Masa Berlaku SPK Pegawai Akan Habis</h4>
                Terdapat {{$count_spk}} orang dengan SPK yang akan habis.
              </div>
        @endif
        @if ($count_rkk != 0)
              <div class="alert alert-warning alert-dismissible pointer" id="rkk_alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-exclamation"></i> Terdapat Beberapa Masa Berlaku RKK Pegawai Akan Habis</h4>
                Terdapat {{$count_rkk}} orang dengan RKK yang akan habis.
              </div>
        @endif
