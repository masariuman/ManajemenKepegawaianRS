<div class="app-sidebar sidebar-shadow bg-happy-fisher sidebar-text-dark">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Selamat Datang</li>
                                @if(auth()->user()->level == 'PEGAWAI')
                                    <li>
                                        <a href="{{route('dasar_pegawai')}}" class="{{ Request::is('/') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Dasar Pegawai
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_pendidikan_formal')}}" class="{{ Request::is('riwayat_pendidikan_formal') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Riwayat Pendidikan Formal
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_diklat_fungsional')}}" class="{{ Request::is('riwayat_diklat_fungsional') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Riwayat Diklat Fungsional
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_diklat_teknis')}}" class="{{ Request::is('riwayat_diklat_teknis') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Riwayat Diklat Teknis
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_diklat_penjenjangan_struktural')}}" class="{{ Request::is('riwayat_diklat_penjenjangan_struktural') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            RD Penjenjangan / Struktural
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_kepangkatan')}}" class="{{ Request::is('riwayat_kepangkatan') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Riwayat Kepangkatan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_jabatan_struktural')}}" class="{{ Request::is('riwayat_jabatan_struktural') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Riwayat Jabatan Struktural
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_jabatan_fungsional')}}" class="{{ Request::is('riwayat_jabatan_fungsional') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Riwayat Jabatan Fungsional
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('istri_suami')}}" class="{{ Request::is('istri_suami') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Istri / Suami
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('anak')}}" class="{{ Request::is('anak') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Anak
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('skp')}}" class="{{ Request::is('skp') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            SPK
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('seminar-lokakarya-simposium')}}" class="{{ Request::is('seminar-lokakarya-simposium') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Seminar / Lokakarya / Simposium
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('tanda_jasa-penghargaan')}}" class="{{ Request::is('tanda_jasa-penghargaan') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Tanda Jasa / Penghargaan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('hukum_disiplin')}}" class="{{ Request::is('hukum_disiplin') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Hukum Disiplin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('keanggotaan_organisasi')}}" class="{{ Request::is('keanggotaan_organisasi') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Keanggotaan Organisasi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('keluarga_kandung')}}" class="{{ Request::is('keluarga_kandung') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Keluarga Kandung
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('keluarga_istri-suami')}}" class="{{ Request::is('keluarga_istri-suami') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Keluarga Istri / Suami
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/riwayat_pekerjaan-jabatan" class="{{ Request::is('riwayat_pekerjaan-jabatan') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Riwayat Perkerjaan / Jabatan
                                        </a>
                                    </li>
                                @endif
                                @if(auth()->user()->level == 'TU')
                                    <li>
                                        <a href="/admin" class="{{ Request::is('admin') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-rocket"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/pegawai" class="{{ Request::is('admin/pegawai') ? 'mm-active' : Request::is('admin/pegawai/*') ? 'mm-active' : ''  }}">
                                            <i class="metismenu-icon pe-7s-users"></i>
                                            Pegawai
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/ruangan" class="{{ Request::is('admin/ruangan') ? 'mm-active' : Request::is('admin/ruangan/*') ? 'mm-active' : ''  }}">
                                            <i class="metismenu-icon pe-7s-home"></i>
                                            Ruangan
                                        </a>
                                    </li>
                                @endif
                                @if(auth()->user()->level == 'ADMIN')
                                    <li>
                                        <a href="/it" class="{{ Request::is('it') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-rocket"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/it/pegawai" class="{{ Request::is('it/pegawai') ? 'mm-active' : Request::is('it/pegawai/*') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-users"></i>
                                            Pegawai
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/it/ruangan" class="{{ Request::is('it/ruangan') ? 'mm-active' : Request::is('it/ruangan/*') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-home"></i>
                                            Ruangan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/it/setting" class="{{ Request::is('it/setting') ? 'mm-active' : Request::is('it/setting/*') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-settings"></i>
                                            Setting
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
