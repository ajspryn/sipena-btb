<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Nasabah Sesuai KTP</th>
            <th>Nama Ibu Kandung</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Bulan Lahir</th>
            <th>Tahun Lahir</th>
            <th>No KTP</th>
            <th>NPWP</th>
            <th>Tanggal Terbitnya KTP</th>
            <th>Bulan Terbitnya KTP</th>
            <th>Tahun Terbitnya KTP</th>
            <th>Expired KTP</th>
            <th>Status Merital</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Email</th>
            <th>Alamat Rumah</th>
            <th>Kelurahan</th>
            <th>kecamatan</th>
            <th>Kota/Kab</th>
            <th>Kode POS</th>
            <th>Telpon Rumah</th>
            <th>Nomor HP</th>
            <th>Sandi Dati</th>
            <th>Jumlah Tanggungan</th>
            <th>Status Pisah Harta</th>
            <th>Nama PT</th>
            <th>Alamat PT</th>
            <th>Kota PT</th>
            <th>Kode POS PT</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($nasabahs as $nasabah)
        @php
            $tgl_lahir=carbon\Carbon::parse($nasabah->tgl_lahir)
        @endphp
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $nasabah->nama_lengkap }}</td>
                <td>{{ $nasabah->nama_ibu_kandung }}</td>
                <td>{{ $nasabah->tempat_lahir }}</td>
                <td>{{ $tgl_lahir->format('d') }}</td>
                <td>{{ $tgl_lahir->format('m') }}</td>
                <td>{{ $tgl_lahir->format('Y') }}</td>
                <td>{{ $nasabah->no_tanda_pengenal }}</td>
                <td>{{ $nasabah->no_npwp }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ $nasabah->status_perkawinan }}</td>
                <td>{{ $nasabah->jenis_kelamin }}</td>
                <td>{{ $nasabah->agama }}</td>
                <td>{{ $nasabah->email }}</td>
                <td>{{ $nasabah->alamat }}</td>
                <td>{{ $nasabah->alamat }}</td>
                <td>{{ $nasabah->alamat }}</td>
                <td>{{ $nasabah->kab_kota }}</td>
                <td>{{ $nasabah->kode_pos }}</td>
                <td>{{ $nasabah->no_telp_rumah }}</td>
                <td>{{ $nasabah->no_telp_hp }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ $nasabah->nama_kantor }}</td>
                <td>{{ $nasabah->alamat_kantor }}</td>
                <td>{{ $nasabah->alamat_kantor }}</td>
                <td>{{ $nasabah->kode_pos_kantor }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
