<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // return $request;
        // $tanda_tangan=$request->tanda_tangan;
        if ($request->file('tanda_tangan')) {
            $tanda_tangan = $request->file('tanda_tangan')->store('tanda_tangan');
        }
        $input=Nasabah::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nama_singkat' => $request->nama_singkat,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kab_kota' => $request->kab_kota,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
            'domisili_alamat' => $request->domisili_alamat,
            'domisili_rt' => $request->domisili_rt,
            'domisili_rw' => $request->domisili_rw,
            'domisili_kab_kota' => $request->domisili_kab_kota,
            'domisili_provinsi' => $request->domisili_provinsi,
            'domisili_kode_pos' => $request->domisili_kode_pos,
            'no_telp_rumah' => $request->no_telp_rumah,
            'no_telp_hp' => $request->no_telp_hp,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'no_tanda_pengenal' => $request->no_tanda_pengenal,
            'email' => $request->email,
            'nama_rekening_bank_lain' => $request->nama_rekening_bank_lain,
            'no_rekening_bank_lain' => $request->no_rekening_bank_lain,
            'Jabatan_pangkat' => $request->Jabatan_pangkat,
            'nama_kantor' => $request->nama_kantor,
            'alamat_kantor' => $request->alamat_kantor,
            'no_telp_kantor' => $request->no_telp_kantor,
            'ext_kantor' => $request->ext_kantor,
            'fax_kantor' => $request->fax_kantor,
            'bidang_usaha' => $request->bidang_usaha,
            'no_npwp' => $request->no_npwp,
            'jenis_hubungan' => $request->jenis_hubungan,
            'nama_hubungan' => $request->nama_hubungan,
            'bekerja_sebagai' => $request->bekerja_sebagai,
            'nama_cs' => $request->nama_cs,
            'hubungan_cs' => $request->hubungan_cs,
            'no_telp_cs' => $request->no_telp_cs,
            'nama_ibu_kandung' => $request->nama_ibu_kandung,
            'tanda_tangan' => $tanda_tangan,
        ]);
        if($input){
            return redirect('/berhasil')->with('success', 'Data BPJS Berhasil Ditambahkan');
        }else{
            return redirect('/gagal')->with('success', 'Data BPJS Berhasil Ditambahkan');
        }
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
