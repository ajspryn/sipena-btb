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
        return view('nasabah.index', [
            'title' => 'Data Nasabah',
            'nasabahs' => Nasabah::select()->where('status', 'inactive')->get(),
        ]);
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

        $tanda_tangan = $request->tanda_tangan;
        $foto_ktp = $request->foto_ktp;
        $foto_npwp = $request->foto_npwp;
        $foto_diri_dan_ktp=$request->foto_diri_dan_ktp;
        if ($request->file('tanda_tangan')) {
            $tanda_tangan = $request->file('tanda_tangan')->store('tanda_tangan');
        }
        if ($request->file('foto_ktp')) {
            $foto_ktp = $request->file('foto_ktp')->store('foto_ktp');
        }
        if ($request->file('foto_diri_dan_ktp')) {
            $foto_diri_dan_ktp = $request->file('foto_diri_dan_ktp')->store('foto_diri_dan_ktp');
        }
        if ($request->file('foto_npwp')) {
            $foto_npwp = $request->file('foto_npwp')->store('foto_npwp');
        }
        $input = Nasabah::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nama_singkat' => $request->nama_singkat,
            'no_rekening' => NULL,
            'warga_negaraan' => $request->warga_negaraan,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kab_kota' => $request->kab_kota,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
            'domisili_alamat' => $request->domisili_alamat,
            'domisili_rt' => $request->domisili_rt,
            'domisili_rw' => $request->domisili_rw,
            'domisili_desa' => $request->domisili_desa,
            'domisili_kecamatan' => $request->domisili_kecamatan,
            'domisili_kab_kota' => $request->domisili_kab_kota,
            'domisili_provinsi' => $request->domisili_provinsi,
            'domisili_kode_pos' => $request->domisili_kode_pos,
            'no_telp_rumah' => $request->no_telp_rumah,
            'no_telp_hp' => $request->no_telp_hp,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'tanda_pengenal' => $request->tanda_pengenal,
            'no_tanda_pengenal' => $request->no_tanda_pengenal,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status_perkawinan' => $request->status_perkawinan,
            'golongan_darah' => $request->golongan_darah,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'email' => $request->email,
            'nama_rekening_bank_lain' => $request->nama_rekening_bank_lain,
            'no_rekening_bank_lain' => $request->no_rekening_bank_lain,
            'pekerjaan' => $request->pekerjaan,
            'jabatan_pangkat' => $request->jabatan_pangkat,
            'nama_kantor' => $request->nama_kantor,
            'alamat_kantor' => $request->alamat_kantor,
            'no_telp_kantor' => $request->no_telp_kantor,
            'ext_kantor' => $request->ext_kantor,
            'fax_kantor' => $request->fax_kantor,
            'bidang_usaha' => $request->bidang_usaha,
            'no_npwp' => $request->no_npwp,
            'maksud_tujuan' => $request->maksud_tujuan,
            'penghasilan' => $request->penghasilan,
            'sumber_dana' => $request->sumber_dana,
            'jenis_hubungan' => $request->jenis_hubungan,
            'nama_hubungan' => $request->nama_hubungan,
            'bekerja_sebagai' => $request->bekerja_sebagai,
            'nama_cs' => $request->nama_cs,
            'hubungan_cs' => $request->hubungan_cs,
            'no_telp_cs' => $request->no_telp_cs,
            'nama_ibu_kandung' => $request->nama_ibu_kandung,
            'tanda_tangan' => $tanda_tangan,
            'foto_ktp' => $foto_ktp,
            'foto_diri_dan_ktp' => $foto_diri_dan_ktp,
            'foto_npwp' => $foto_npwp,
            'status' => 'inactive',
        ]);
        if ($input) {
            return redirect('/berhasil')->with('success', 'Data BPJS Berhasil Ditambahkan');
        } else {
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
        return view('nasabah.lihat', [
            'title' => 'Detail Nasabah',
            'nasabah' => Nasabah::Select()->where('id', $id)->get()->first(),
        ]);
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
