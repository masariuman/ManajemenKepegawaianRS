<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periode;
use App\Pegawai;
use App\Skp;
use App\FormSkp;
use App\PenilaianSkp;
use App\PengukuranSkp;
use App\PerilakuKerjaSkp;

class adminSkpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $periode = Periode::all();
        $pegawai = Pegawai::where('active','1')->orderBy('id','DESC')->get();
        foreach ($periode as $key => $value_periode) {
            if ($value_periode->periode === 'Semester 1') {
                $semester = 'semester1';
            } else if ($value_periode->periode === 'Semester 2'){
                $semester = 'semester2';
            } else {
                $semester = 'setahun';
            }
            $period = $value_periode->tahun.$semester;
            foreach ($pegawai as $key => $value_pegawai) {
                if (empty($value_pegawai->skp[0]) || empty($value_pegawai->formSkp[0]) || empty($value_pegawai->pengukuranSkp[0]) || empty($value_pegawai->penilaianSkp[0]) || empty($value_pegawai->perilakuKerjaSkp[0])) {
                    $data['tidak_lengkap'][$period]['pegawai'][] = $value_pegawai;
                    $data['tidak_lengkap'][$period]['periode'] = $period;
                } else {
                    //do nothing
                }
            }
        }
        $data['tahun'] = Periode::pluck('tahun')->unique();
        // dd($data['tahun']);

        return view('admin/skp/index',$data);
    }

    public function sudah()
    {
        //
        $periode = Periode::orderBy('id','DESC')->first();
        $data['tahun'] = Periode::pluck('tahun')->unique();
        $pegawai = Pegawai::where('active','1')->orderBy('id','DESC')->get();
        if ($periode->periode === 'Semester 1') {
            $semester = 'semester1';
        } else if ($periode->periode === 'Semester 2'){
            $semester = 'semester2';
        } else {
            $semester = 'setahun';
        }
        $period = $periode->tahun.$semester;
        foreach ($pegawai as $key => $value_pegawai) {
            if (empty($value_pegawai->skp[0]) || empty($value_pegawai->formSkp[0]) || empty($value_pegawai->pengukuranSkp[0]) || empty($value_pegawai->penilaianSkp[0]) || empty($value_pegawai->perilakuKerjaSkp[0])) {
                //do nothing
            } else {
                    $data['lengkap'][] = $value_pegawai;
            }
        }

        // return view('admin/skp/sudah',$data);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
