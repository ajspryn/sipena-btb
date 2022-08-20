<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->nullable();
            $table->string('nama_singkat')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('warga_negaraan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kab_kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('domisili_alamat')->nullable();
            $table->string('domisili_rt')->nullable();
            $table->string('domisili_rw')->nullable();
            $table->string('domisili_desa')->nullable();
            $table->string('domisili_kecamatan')->nullable();
            $table->string('domisili_kab_kota')->nullable();
            $table->string('domisili_provinsi')->nullable();
            $table->string('domisili_kode_pos')->nullable();
            $table->string('no_telp_rumah')->nullable();
            $table->string('no_telp_hp')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('tanda_pengenal')->nullable();
            $table->string('no_tanda_pengenal')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('email')->nullable();
            $table->string('nama_rekening_bank_lain')->nullable();
            $table->string('no_rekening_bank_lain')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('jabatan_pangkat')->nullable();
            $table->string('nama_kantor')->nullable();
            $table->string('alamat_kantor')->nullable();
            $table->string('no_telp_kantor')->nullable();
            $table->string('ext_kantor')->nullable();
            $table->string('fax_kantor')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('no_npwp')->nullable();
            $table->string('maksud_tujuan')->nullable();
            $table->string('penghasilan')->nullable();
            $table->string('sumber_dana')->nullable();
            $table->string('jenis_hubungan')->nullable();
            $table->string('nama_hubungan')->nullable();
            $table->string('bekerja_sebagai')->nullable();
            $table->string('nama_cs')->nullable();
            $table->string('hubungan_cs')->nullable();
            $table->string('no_telp_cs')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('tanda_tangan')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('foto_diri_dan_ktp')->nullable();
            $table->string('foto_npwp')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nasabahs');
    }
};
