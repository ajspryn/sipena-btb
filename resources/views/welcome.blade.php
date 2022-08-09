@extends('layouts.front.main')

@section('content')
    <!-- BEGIN: Content -->
    <div class="content content--top-nav">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 2xl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5"><span class="text-danger">* Wajib Diisi</span></h2>
                        </div>
                        <div class="grid grid-cols-12 gap-12 mt-5">
                            <div class="col-span-12 sm:col-span-12 xl:col-span-12 intro-y">
                                <!-- BEGIN: Validation Form -->
                                <form class="validate-form" method="POST" action="/nasabah" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-form">
                                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> Nama Lengkap
                                        </label>
                                        <input id="validation-form-1" type="text" name="nama_lengkap" class="form-control"
                                            placeholder="Nama Lengkap">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> Nama Singkat
                                        </label>
                                        <input id="validation-form-1" type="text" name="nama_singkat" class="form-control"
                                            placeholder="Nama Singkat">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Kewarganegaraan</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="wni" class="form-check-input" type="radio"
                                                    name="kewarganegaraan" value="WNI">
                                                <label class="form-check-label" for="wni">WNI</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="wna" class="form-check-input" type="radio"
                                                    name="kewarganegaraan" value="WNA">
                                                <label class="form-check-label" for="wna">WNA</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Alamat Sesuai KTP</label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="form-control col-span-3" placeholder="Alamat"
                                                aria-label="default input inline 1" name="alamat">
                                            <input type="number" class="form-control col-span-1" placeholder="RT"
                                                aria-label="default input inline 2" name="rt" maxlength="3" minlength="1">
                                            <input type="number" class="form-control col-span-1" placeholder="RW"
                                                aria-label="default input inline 3" name="rw" maxlength="3" minlength="1">
                                            <input type="text" class="form-control col-span-3"
                                                placeholder="Kabupaten/Kota" aria-label="default input inline 4" name="kab_kota">
                                            <input type="text" class="form-control col-span-3" placeholder="Provinsi"
                                                aria-label="default input inline 5" name="provinsi">
                                            <input type="number" class="form-control col-span-1" placeholder="Kode Pos"
                                                aria-label="default input inline 6" name="kode_pos" minlength="5" maxlength="5">
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row">
                                            Alamat Domisili</label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="form-control col-span-3" placeholder="Alamat"
                                                aria-label="default input inline 1" name="domisili_alamat">
                                            <input type="number" class="form-control col-span-1" placeholder="RT"
                                                aria-label="default input inline 2" name="domisili_rt" maxlength="3" minlength="1">
                                            <input type="number" class="form-control col-span-1" placeholder="RW"
                                                aria-label="default input inline 3" name="domisili_rw" maxlength="3" minlength="1">
                                            <input type="text" class="form-control col-span-3"
                                                placeholder="Kabupaten/Kota" aria-label="default input inline 4" name="domisili_kab_kota">
                                            <input type="text" class="form-control col-span-3" placeholder="Provinsi"
                                                aria-label="default input inline 5" name="domisili_provinsi">
                                            <input type="number" class="form-control col-span-1" placeholder="Kode Pos"
                                                aria-label="default input inline 6" name="domisili_kode_pos" minlength="5" maxlength="5">
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> No Telp Rumah
                                        </label>
                                        <input id="validation-form-1" type="tel" name="no_telp_rumah"
                                            class="form-control" placeholder="" minlength="10" maxlength="12">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> No Telp Genggam/Hp
                                        </label>
                                        <input id="validation-form-1" type="tel" name="no_telp_hp"
                                            class="form-control" placeholder="" minlength="10" maxlength="12">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> Tempat/Tanggal Lahir
                                        </label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="form-control col-span-3"
                                                placeholder="Tempat Lahir" name="tempat_lahir" aria-label="default input inline 1">
                                            <input type="date" class="form-control col-span-6" data-single-mode="true"
                                                aria-label="default input inline 2" name="tgl_lahir">
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Agama</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="agama-1" class="form-check-input" type="radio"
                                                    name="agama" value="Islam">
                                                <label class="form-check-label" for="agama-1">Islam</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="agama-2" class="form-check-input" type="radio"
                                                    name="agama" value="Katolik">
                                                <label class="form-check-label" for="agama-2">Katolik</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="agama-3" class="form-check-input" type="radio"
                                                    name="agama" value="Protestan">
                                                <label class="form-check-label" for="agama-3">Protestan</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="agama-4" class="form-check-input" type="radio"
                                                    name="agama" value="Hindu">
                                                <label class="form-check-label" for="agama-4">Hindu</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="agama-5" class="form-check-input" type="radio"
                                                    name="agama" value="Budha">
                                                <label class="form-check-label" for="agama-5">Budha</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Tanda Pengenal</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="pengenal-1" class="form-check-input" type="radio"
                                                    name="tanda_pengenal" value="KTP">
                                                <label class="form-check-label" for="pengenal-1">KTP</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="pengenal-2" class="form-check-input" type="radio"
                                                    name="tanda_pengenal" value="SIM">
                                                <label class="form-check-label" for="pengenal-2">SIM</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="pengenal-3" class="form-check-input" type="radio"
                                                    name="tanda_pengenal" value="Paspor">
                                                <label class="form-check-label" for="pengenal-3">Paspor</label>
                                            </div>
                                            <input type="number" class="form-control col-span-6"
                                                aria-label="default input inline 1" name="no_tanda_pengenal" minlength="16" maxlength="16"
                                                placeholder="Nomor Tanda Pengenal">
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Jenis Kelamin</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="jenis_kelamin" value="Laki - Laki">
                                                <label class="form-check-label" for="radio-switch-4">Laki - Laki</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="jenis_kelamin" value="Perempuan">
                                                <label class="form-check-label" for="radio-switch-5">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Status Perkawinan</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="status_perkawinan" value="Belum Menikah">
                                                <label class="form-check-label" for="radio-switch-4">Belum Menikah</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="status_perkawinan" value="Sudah Menikah">
                                                <label class="form-check-label" for="radio-switch-5">Sudah Menikah</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="status_perkawinan" value="Janda/Duda">
                                                <label class="form-check-label" for="radio-switch-5">Janda/Duda</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Golongan Darah</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="golongan_darah" value="A">
                                                <label class="form-check-label" for="radio-switch-4">A</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="golongan_darah" value="B">
                                                <label class="form-check-label" for="radio-switch-5">B</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="golongan_darah" value="AB">
                                                <label class="form-check-label" for="radio-switch-5">AB</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="golongan_darah" value="O">
                                                <label class="form-check-label" for="radio-switch-5">O</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Pendidikan Terakhir</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="SD">
                                                <label class="form-check-label" for="radio-switch-4">SD</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="SMP">
                                                <label class="form-check-label" for="radio-switch-5">SMP</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="SMA">
                                                <label class="form-check-label" for="radio-switch-5">SMA</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="D3">
                                                <label class="form-check-label" for="radio-switch-5">D3</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="S1">
                                                <label class="form-check-label" for="radio-switch-5">S1</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="S2">
                                                <label class="form-check-label" for="radio-switch-5">S2</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="S3">
                                                <label class="form-check-label" for="radio-switch-5">S3</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            Alamat Email
                                        </label>
                                        <input id="validation-form-1" type="email" name="email" class="form-control"
                                            placeholder="Alamat Email">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row">
                                            Rekening Bank Lain</label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="form-control col-span-3" name="nama_rekening_bank_lain" placeholder="Nama Bank"
                                                aria-label="default input inline 1">
                                            <input type="number" class="form-control col-span-6" name="no_rekening_bank_lain"
                                                placeholder="Nomor Rekening" aria-label="default input inline 2">
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Pekerjaan Sekarang</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="Pelajar/Mahasiswa">
                                                <label class="form-check-label"
                                                    for="radio-switch-4">Pelajar/Mahasiswa</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="PNS">
                                                <label class="form-check-label" for="radio-switch-5">PNS</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="TNI/POLRI">
                                                <label class="form-check-label" for="radio-switch-5">TNI/POLRI</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="Wiraswasta">
                                                <label class="form-check-label" for="radio-switch-5">Wiraswasta</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="BUMN?D">
                                                <label class="form-check-label" for="radio-switch-5">BUMN?D</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="Karuawan Swasta">
                                                <label class="form-check-label" for="radio-switch-5">Karyawan
                                                    Swatsa</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="Pensiunan">
                                                <label class="form-check-label" for="radio-switch-5">Pensiunan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> Jabatan/Pangkat
                                        </label>
                                        <input id="validation-form-1" type="text" name="Jabatan_pangkat" class="form-control"
                                            placeholder="Jabatan/Pangkat">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> Nama Kantor
                                        </label>
                                        <input id="validation-form-1" type="text" name="nama_kantor" class="form-control"
                                            placeholder="Nama Kantor">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> Alamat Kantor
                                        </label>
                                        <textarea id="validation-form-1" type="text" name="alamat_kantor" class="form-control" placeholder="Alamat Kantor"
                                        ></textarea>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> No Telp Kantor
                                        </label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="tel" class="form-control col-span-6"
                                                placeholder="No Telp Kantor" name="no_telp_kantor" aria-label="default input inline 1">
                                            <input type="number" class="form-control col-span-2" data-single-mode="true"
                                                placeholder="Ext" name="ext_kantor" aria-label="default input inline 2">
                                            <input type="number" class="form-control col-span-4" data-single-mode="true"
                                                placeholder="Fax" name="fax_kantor" aria-label="default input inline 2">
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> Bidang Usaha
                                        </label>
                                        <input id="validation-form-1" type="text" name="bidang_usaha" class="form-control"
                                            placeholder="Bidang Usaha">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            No NPWP
                                        </label>
                                        <input id="validation-form-1" type="number" name="no_npwp" class="form-control"
                                            placeholder="No NPWP">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Maksud & Tujuan Hub.Usaha</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="maksud_tujuan" value="Investasi">
                                                <label class="form-check-label" for="radio-switch-4">Investasi</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="maksud_tujuan" value="Transaksi">
                                                <label class="form-check-label" for="radio-switch-5">Transaksi</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="maksud_tujuan" value="Keperluan Pribadi">
                                                <label class="form-check-label" for="radio-switch-5">Keperluan
                                                    Pribadi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Rata Rata Penghasilan</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="penghasilan" value="> Rp.5 Juta">
                                                <label class="form-check-label" for="radio-switch-4">< Rp.5 Juta</label>
                                            </div>
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="penghasilan" value="Rp.5 Juta - Rp.10 Juta">
                                                <label class="form-check-label" for="radio-switch-4">Rp.5 Juta - Rp.10
                                                    Juta</label>
                                            </div>
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="penghasilan" value="Rp.10 Juta - Rp.15 Juta">
                                                <label class="form-check-label" for="radio-switch-4">Rp.10 Juta - Rp.15
                                                    Juta</label>
                                            </div>
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="penghasilan" value="Rp.15 Juta - Rp.500 Juta">
                                                <label class="form-check-label" for="radio-switch-4">Rp.15 Juta - Rp.500
                                                    Juta</label>
                                            </div>
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="penghasilan" value="Rp.300 Juta - Rp.1 M">
                                                <label class="form-check-label" for="radio-switch-4">Rp.300 Juta - Rp.1
                                                    M</label>
                                            </div>
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="penghasilan" value="> Rp.1 M">
                                                <label class="form-check-label" for="radio-switch-4">> Rp.1 M</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Sumber Dana</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="sumber_dana" value="Gaji">
                                                <label class="form-check-label" for="radio-switch-4">Gaji</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="sumber_dana" value="Hasil Usaha">
                                                <label class="form-check-label" for="radio-switch-5">Hasil Usaha</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="sumber_dana" value="Hasil Investasi">
                                                <label class="form-check-label" for="radio-switch-5">Hasil
                                                    Investasi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row">Bila Tidak Bekerja,
                                            Sumber Dana</label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="form-control col-span-4"
                                                aria-label="default input inline 1" name="jenis_hubungan" placeholder="Hubungan">
                                            <input type="text" class="form-control col-span-4"
                                                aria-label="default input inline 1" name="nama_hubungan" placeholder="Nama">
                                            <input type="text" class="form-control col-span-4"
                                                aria-label="default input inline 1" name="bekerja_sebagai" placeholder="Bekerja Sebagai">
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> Nama Contact Person
                                        </label>
                                        <input id="validation-form-1" type="text" name="nama_cs" class="form-control"
                                            placeholder="Nama Singkat">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Hubungan</label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="form-control col-span-4"
                                                aria-label="default input inline 1" name="hubungan_cs" placeholder="Hubungan">
                                            <input type="tel" class="form-control col-span-6" name="no_telp_cs"
                                                aria-label="default input inline 1" minlength="16" maxlength="16"
                                                placeholder="No Telp/Hp">
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> Nama Ibu Kandung
                                        </label>
                                        <input id="validation-form-1" type="text" name="nama_ibu_kandung" class="form-control"
                                            placeholder="Nama Ibu Kandung">
                                    </div>
                                    <br>
                                    <hr>
                                    <div>
                                        <p>Sehubungan dengan data/informasi serta dokumen-dokumen yang Saya/Kami Berikan
                                            tersebut di atas, dengan ini saya/Kami sek pemohon menyatakan sebagai berikut:
                                        </p>
                                        <table>
                                            <tr>
                                                <td>1. </td>
                                                <td>
                                                    Bahwa informasi dalam formulir aplikasi ini dan syarat-syarat umum telah
                                                    Saya/Kami isi dengan lengkap dan sebenar-benams
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2. </td>
                                                <td>
                                                    Dengan ini Saya/Kami memberikan persetujuan dan kuasa kepada Bank
                                                    Syariah BTB untuk memperoleh referensi dari sumber manapun dan dengan
                                                    cara yang dianggap layak
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3. </td>
                                                <td>
                                                    Apabila permohonan Saya/Kami disetujui. Saya kami akan tunduk dan
                                                    terikat pada ketentuan dan syarat-syarat yang dikeluarkan oleh Bank
                                                    Syariah BTB
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4. </td>
                                                <td>
                                                    Bank Syariah BTB berhak untuk menolah permohonan Saya/Kami dengan tanpa
                                                    kewajiban untuk menunjukkan alasan-alasan
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>
                                                    Nasabah telah mengerti dan memahami penjelasan yang diberikan Bank
                                                    Syariah BTB mengenai produk dan segala konsekuen pemanfaatn produk Bank
                                                    Syariah BTB, termasuk manfaat, resiko dan biaya-biaya yang melekat pada
                                                    produk tersebut
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6. </td>
                                                <td>
                                                    Semua Dokumen pendukung yang diserahkan kepada Bank Syariah BTB adalah
                                                    benar dan diperoleh dengan cara yang sah
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="input-form mt-3">
                                        <!-- BEGIN: Single File Upload -->
                                        <div class="intro-y box">
                                            <div id="single-file-upload" class="p-5">
                                                <div class="preview">
                                                    <div class="fallback">
                                                        <input name="tanda_tangan" type="file" />
                                                    </div>
                                                    <div class="dz-message" data-dz-message>
                                                        <div class="text-lg font-medium">Upload Foto Tanda Tangan Anda</div>
                                                        <div class="text-slate-500">
                                                            Silahkan Lakukan Tanda Tangan Di kertas Kosong Lalu Foto Tanda Tangan Tersebut Dan Upload Disini
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Single File Upload -->
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-5 ">Register</button>
                                </form>
                                <!-- END: Validation Form -->
                            </div>
                        </div>
                    </div>
                    <!-- END: General Report -->
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content -->
@endsection
