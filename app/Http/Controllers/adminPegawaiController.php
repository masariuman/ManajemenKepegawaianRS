<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\User;
use App\PendidikanFormal;
use App\Ruangan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class adminPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['ruangan'] = Ruangan::where('active','1')->get();
        $data['pegawai'] = Pegawai::where('active','1')->orderBy('id','DESC')->get();
        return view('admin/pegawai/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $spasi = '';
        $spasi2 = '';
        if ($request->gelar_depan != null) {
            $spasi = '. ';
        }
        if($request->gelar_belakang !=null) {
            $spasi2 = ', ';
        }
        $nama = $request->gelar_depan.$spasi.$request->nama.$spasi2.$request->gelar_belakang;
        $lahir = explode("-",$request->tanggal_lahir);
        $lahir = $lahir[2].$lahir[1].$lahir[0];
        $password = Hash::make($lahir);
        User::create([
            'name' => $nama,
            'email' => $request->email,
            'password' => $password
        ]);
        $newuser = User::where('email',$request->email)->first();
        Pegawai::create([
            'nama_pegawai' => $request->nama,
            'gelar_depan' => $request->gelar_depan,
            'gelar_belakang'=> $request->gelar_belakang,
            'tanggal_lahir' => $request->tanggal_lahir,
            'user_id' => $newuser->id,
            'ruangan_id' => $request->ruangan
        ]);

        $pesan = 'User baru telah dibuat. Silahkan memberitahu pegawai untuk login dengan email <b>'.$newuser->email.'</b> dan dengan password tanggal lahir(<b>'.$lahir.'</b>) untuk melengkapi data dasar.';

        Session::flash('Berhasil', $pesan);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dasar
        $data['ruangan'] = Ruangan::where('active','1')->get();
        $data['pegawai'] = Pegawai::findOrFail($id);
        $data['pegawai']['masa_rkk'] = date("d F Y", strtotime($data['pegawai']['masa_rkk']));
        $data['pegawai']['masa_spk'] = date("d F Y", strtotime($data['pegawai']['masa_spk']));
        $data['pegawai']['masa_sikp'] = date("d F Y", strtotime($data['pegawai']['masa_sikp']));
        $data['pegawai']['masa_str'] = date("d F Y", strtotime($data['pegawai']['masa_str']));
        $data['pegawai']['tmt_golongan'] = date("d F Y", strtotime($data['pegawai']['tmt_golongan']));
        $data['pegawai']['tmt_cpns'] = date("d F Y", strtotime($data['pegawai']['tmt_cpns']));
        $data['pegawai']['tanggal_lahir'] = date("d F Y", strtotime($data['pegawai']['tanggal_lahir']));
        if ($data['pegawai']['jenis_kelamin'] === "W") {
            $data['pegawai']['jenis_kelamin'] = "Perempuan";
        } else {
            $data['pegawai']['jenis_kelamin'] = "Laki-Laki";
        }
        if ($data['pegawai']['status_keluarga'] === "K"){
            $data['pegawai']['status_keluarga'] = "Sudah Menikah";
        } else if ($data['pegawai']['status_keluarga'] === "B"){
            $data['pegawai']['status_keluarga'] = "Belum Menikah";
        } else if ($data['pegawai']['status_keluarga'] === "D"){
            $data['pegawai']['status_keluarga'] = "Duda";
        } else {
            $data['pegawai']['status_keluarga'] = "Janda";
        }
        if ($data['pegawai']['agama'] === "1"){
            $data['pegawai']['agama'] = "Islam";
        } else if ($data['pegawai']['agama'] === "2"){
            $data['pegawai']['agama'] = "Katholik";
        } else if ($data['pegawai']['agama'] === "3"){
            $data['pegawai']['agama'] = "Protestan";
        } else if ($data['pegawai']['agama'] === "4"){
            $data['pegawai']['agama'] = "Hindu";
        } else if ($data['pegawai']['agama'] === "5"){
            $data['pegawai']['agama'] = "Budha";
        } else {
            $data['pegawai']['agama'] = "Protestan";
        }
        if ($data['pegawai']['status_kepegawaian'] === "1"){
            $data['pegawai']['status_kepegawaian'] = "CPNS";
        } else if ($data['pegawai']['status_kepegawaian'] === "2"){
            $data['pegawai']['status_kepegawaian'] = "PNS";
        } else if ($data['pegawai']['status_kepegawaian'] === "3"){
            $data['pegawai']['status_kepegawaian'] = "PNS DPK dari DEP.LAIN";
        } else {
            $data['pegawai']['status_kepegawaian'] = "PNS DPK ke DEP.LAIN";
        }
        if ($data['pegawai']['taspen'] === "1"){
            $data['pegawai']['taspen'] = "Sudah";
        }else {
            $data['pegawai']['taspen'] = "Belum";
        }

        //riwayat pendidikan formal
        $data['pendidikan_formal'] = PendidikanFormal::where('pegawai_id',$id)->where('active','1')->get();
        foreach ($data['pendidikan_formal'] as $key => $value) {
            if ($value['tingkat_pendidikan'] === "01") {
                $value['tingkat_pendidikan'] = "S3 (Setara)";
            } else if ($value['tingkat_pendidikan'] === "02") {
                $value['tingkat_pendidikan'] = "S2 (Setara)";
            } else if ($value['tingkat_pendidikan'] === "03") {
                $value['tingkat_pendidikan'] = "S1 (Setara)";
            } else if ($value['tingkat_pendidikan'] === "04") {
                $value['tingkat_pendidikan'] = "D4";
            } else if ($value['tingkat_pendidikan'] === "05") {
                $value['tingkat_pendidikan'] = "SM";
            } else if ($value['tingkat_pendidikan'] === "06") {
                $value['tingkat_pendidikan'] = "D3";
            } else if ($value['tingkat_pendidikan'] === "07") {
                $value['tingkat_pendidikan'] = "D2";
            } else if ($value['tingkat_pendidikan'] === "08") {
                $value['tingkat_pendidikan'] = "D1";
            } else if ($value['tingkat_pendidikan'] === "09") {
                $value['tingkat_pendidikan'] = "SLTA";
            } else if ($value['tingkat_pendidikan'] === "10") {
                $value['tingkat_pendidikan'] = "SLTP";
            } else {
                $value['tingkat_pendidikan'] = "SD";
            }
            if ($value['tempat_belajar'] === "1") {
                $value['tempat_belajar'] = "Dalam Negeri";
            } else {
                $value['tempat_belajar'] = "Luar Negeri";
            }
        }


        return view('admin/pegawai/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
